<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to CodeIgniter</title>
    <?php $this->load->view('_common/meta');?>
    <?php $this->load->view('_common/css');?>
</head>
<body>
    <div class="container-fluid" style="padding-top: 5px;">
        <nav class="navbar" style="background-color: blue;">
            <div class="nav-item">
                <a href="" class="nav-link active">Test 1</a>
            </div>
            <div class="nav-item">
                <a href="" class="nav-link">Test 2</a>
            </div>
            <form>
                <input type="text" name="Search">
            </form>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Test</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead style="font-size: 20px;" class="font-weight-bold">
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Test</td>
                                    <td>Test</td>
                                    <td>Test</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php $this->load->view('_common/js');?>
</html>
