<?php
require_once __DIR__ . '/../Model/JuegoLotModel.php';

class JuegoLotController {
    private $model;

    public function __construct() {
        $this->model = new JuegoLotModel();
    }

    public function index() {
        // Obtener datos del modelo
        $recentEntries = $this->model->getRecentEntries();
        
        include __DIR__ . '/../View/Header.php';
?>

        <!-- Wrapper para contenido y sidebar -->
        <div id="wrapper" class="d-flex">

            <!-- Contenido principal -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    
                    <!-- Topbar -->
                    <?php include __DIR__ . '/../View/Navbar.php'; ?>

                    <!-- Contenido -->
                    <?php include __DIR__ . '/../View/Juego_Loteria.php'; ?>
                    
                </div>
                <!-- End of Content -->

                <!-- Footer -->
                <?php include __DIR__ . '/../View/Footer.php'; ?>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Wrapper -->

<?php
        include __DIR__ . '/../View/Scripts.php';
    }
}

$controller = new JuegoLotController();
$controller->index();
?>
