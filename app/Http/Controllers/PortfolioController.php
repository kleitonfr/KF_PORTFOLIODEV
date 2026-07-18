<?php

namespace App\Http\Controllers;

use App\Services\PortfolioService;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function __construct(protected PortfolioService $portfolioService)
    {
    }

    public function index(): View
    {
        $pageData = $this->portfolioService->getPageData();

        $contact = [
            'email' => 'kleytonferreira9@gmail.com',
            'whatsapp' => 'https://wa.me/5512981232278',
            'linkedin' => $pageData['socialLinks'][1]['url'] ?? '',
            'github' => $pageData['socialLinks'][0]['url'] ?? '',
            'location' => 'Caraguatatuba · São Paulo · Brasil',
        ];

        return view('portfolio.index', [
            'hero' => $pageData['hero'],
            'journey' => $pageData['journey'],
            'projects' => $pageData['projects'],
            'socialLinks' => $pageData['socialLinks'],
            'contact' => $contact,
        ]);
    }

    public function showProject(string $slug): View
    {
        $project = $this->portfolioService->getProjectBySlug($slug);

        abort_if($project === null, 404);

        return view('portfolio.project', [
            'project' => $project,
            'socialLinks' => $this->portfolioService->getPageData()['socialLinks'],
        ]);
    }
}
