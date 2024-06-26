<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Notifier\TexterInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MainController extends AbstractController
{
    #[Route('/', 'index')]
    public function index(Request $request): Response {
        return $this->render('home.html.twig');
    }

    #[Route('about', 'about')]
    public function about(Request $request): Response {
        return $this->render('about.html.twig');
    }

    #[Route('home', 'homeRedirect')]
    public function home(Request $request): Response {
        return $this->render('home.html.twig');
    }

    #[Route('dashboard', 'dashboard')]
    public function dashboard(Request $request): Response {
        return $this->render('dashboard.html.twig');
    }
    #[Route('ocr', 'ocr')]
    public function ocr(Request $request): Response {
        return $this->render('ocr.html.twig');
    }

    #[Route('user/dashboard', 'userDashboard')]
    public function account_dash(Request $request): Response {
        return $this->render('account.html.twig');
    }

    #[Route('fileUpload', 'fileUpload')]
        public function file_upload(Request $request): Response {
            return $this->render('file_upload.html.twig');
        }

    #[Route('logSpreadsheet/{fileID}', 'logSpreadsheet')]
            public function log_spreadsheet(Request $request, string $fileID): Response {
                return $this->render('log_spreadsheet.twig', ['fileID' => $fileID]);
            }
    #[Route('ocrView/{fileID}', 'ocrView')]
                public function ocr_view(Request $request, string $fileID): Response {
                    return $this->render('ocr_view.twig', ['fileID' => $fileID]);
                }


    #[Route('dashboard/plane/{planeID}', 'planeInfo')]
    public function plane_info(Request $request, string $planeID): Response {
        // Check if user is authenticated to view this! For sprint 3 :D
        return $this->render('plane_info.html.twig', ['planeID' => $planeID]);
    }
}