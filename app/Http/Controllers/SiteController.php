<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Services\ProductCatalog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    /**
     * Home page view.
     */
    public function home(): View
    {
        $featuredProducts = ProductCatalog::featured();
        $allProducts = ProductCatalog::all();
        $categories = ProductCatalog::categories();
        $schemes = ProductCatalog::schemes();

        // 20 Gallery customer photos
        $galleryImages = [];
        for ($i = 1; $i <= 20; $i++) {
            $galleryImages[] = "/images/gallery-{$i}.jpg";
        }

        return view('pages.home', [
            'featuredProducts' => $featuredProducts,
            'allProducts' => $allProducts,
            'categories' => $categories,
            'schemes' => $schemes,
            'galleryImages' => $galleryImages,
        ]);
    }

    /**
     * Products catalog view with search and filter.
     */
    public function products(Request $request): View
    {
        $category = $request->query('category', 'all');
        $scheme = $request->query('scheme');
        $search = $request->query('q');

        $products = ProductCatalog::all();

        if ($category && $category !== 'all') {
            $products = array_filter($products, fn ($p) => $p['category'] === $category);
        }

        if ($scheme) {
            $products = array_filter($products, function ($p) use ($scheme) {
                foreach ($p['schemes'] as $s) {
                    if (stripos($s, $scheme) !== false) {
                        return true;
                    }
                }
                return false;
            });
        }

        if ($search) {
            $searchLower = mb_strtolower(trim($search));
            $products = array_filter($products, function ($p) use ($searchLower) {
                return str_contains(mb_strtolower($p['name']), $searchLower)
                    || str_contains(mb_strtolower($p['hindi_name']), $searchLower)
                    || str_contains(mb_strtolower($p['short_desc']), $searchLower)
                    || str_contains(mb_strtolower($p['category_label']), $searchLower);
            });
        }

        return view('pages.products', [
            'products' => array_values($products),
            'categories' => ProductCatalog::categories(),
            'currentCategory' => $category,
            'currentScheme' => $scheme,
            'searchQuery' => $search,
            'schemes' => ProductCatalog::schemes(),
        ]);
    }

    /**
     * Product single detail page.
     */
    public function productDetail(string $slug): View
    {
        $product = ProductCatalog::findBySlug($slug);

        if (! $product) {
            abort(404, 'उत्पाद नहीं मिला (Product not found)');
        }

        // Related products in same category
        $relatedProducts = array_values(array_filter(
            ProductCatalog::all(),
            fn ($p) => $p['category'] === $product['category'] && $p['id'] !== $product['id']
        ));

        return view('pages.product-detail', [
            'product' => $product,
            'relatedProducts' => array_slice($relatedProducts, 0, 4),
            'schemes' => ProductCatalog::schemes(),
        ]);
    }

    /**
     * About Us page view.
     */
    public function about(): View
    {
        return view('pages.about', [
            'schemes' => ProductCatalog::schemes(),
        ]);
    }

    /**
     * Services page view.
     */
    public function services(): View
    {
        return view('pages.services', [
            'schemes' => ProductCatalog::schemes(),
        ]);
    }

    /**
     * Government Schemes guide page.
     */
    public function schemes(): View
    {
        return view('pages.schemes', [
            'schemes' => ProductCatalog::schemes(),
            'featuredProducts' => ProductCatalog::featured(),
        ]);
    }

    /**
     * Contact Us page view.
     */
    public function contact(): View
    {
        $products = ProductCatalog::all();

        return view('pages.contact', [
            'products' => $products,
            'schemes' => ProductCatalog::schemes(),
        ]);
    }

    /**
     * Handle Inquiry form submission.
     */
    public function submitInquiry(Request $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'city' => ['nullable', 'string', 'max:100'],
            'state' => ['nullable', 'string', 'max:100'],
            'machine_name' => ['nullable', 'string', 'max:255'],
            'scheme' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $inquiry = Inquiry::create($validated);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'धन्यवाद! आपकी पूछताछ सफलता पूर्वक दर्ज हो गई है। हमारी तकनीकी टीम आपसे जल्द ही संपर्क करेगी।',
                'inquiry_id' => $inquiry->id,
            ]);
        }

        return back()->with('success', 'धन्यवाद! आपकी पूछताछ (Inquiry) सफलतापूर्वक प्राप्त हो गई है। हमारी टीम जल्द ही आपसे 7061973186 से संपर्क करेगी।');
    }
}

