<?php
include 'Common/Header.php';
include 'Common/connection.php';
include 'Common/aside_bar.php';

$id = $_GET['user_id'];
$sql = "SELECT * FROM text WHERE id = $id";
$result = $connection->query($sql);
$op = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    $stmt = $connection->prepare("UPDATE text SET title = ?, name = ?, number = ?, email = ?, address = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $title, $name, $number, $email, $address, $id);
    $stmt->execute();
    
    mysqli_close($connection);
}
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>General Form Elements <small>Preview</small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">General Elements</li>
            </ol>
        </section>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Contacts</h3>
            </div>

            <form action="" method="POST">
                <div class="row g-4" style="width: 90%; margin-left: 5%;">
                    <!-- Title -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold" style="font-size:18px; color:#333;">
                            <i class="fas fa-user-tag me-2 text-primary"></i> Title
                        </label>
                        <div class="input-group shadow-sm rounded-3" style="width:80%;">
                            <select class="form-select form-control-lg border-0" name="title">
                                <option disabled>-- Select Title --</option>
                                <option value="Mr." <?php if ($op['title'] == "Mr.") echo "selected"; ?>>Mr.</option>
                                <option value="Mrs." <?php if ($op['title'] == "Mrs.") echo "selected"; ?>>Mrs.</option>
                                <option value="Miss" <?php if ($op['title'] == "Miss") echo "selected"; ?>>Miss</option>
                                <option value="Dr" <?php if ($op['title'] == "Dr") echo "selected"; ?>>Dr.</option>
                            </select>
                        </div>
                    </div>

                    <!-- Name -->
                    <div class="col-md-6">
                        <label class="form-label"> <i class="fas fa-user me-2"></i>Name </label>
                        <input type="text" class="form-control form-control-lg custom-input" name="name"
                            value="<?php echo htmlspecialchars($op['name']); ?>">
                    </div>

                    <!-- Number -->
                    <div class="col-md-6">
                        <label class="form-label"> <i class="fas fa-phone me-2"></i>Number </label>
                        <input type="tel" class="form-control form-control-lg custom-input" name="number"
                            value="<?php echo htmlspecialchars($op['number']); ?>">
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label class="form-label"> <i class="fas fa-envelope me-2"></i>Email </label>
                        <input type="email" class="form-control form-control-lg custom-input" name="email"
                            value="<?php echo htmlspecialchars($op['email']); ?>">
                    </div>

                    <!-- Address -->
                    <div class="col-12">
                        <label class="form-label"> <i class="fas fa-map-marker-alt me-2"></i>Address </label>
                        <textarea class="form-control form-control-lg custom-input" rows="4" name="address"
                            placeholder=""><?php echo htmlspecialchars($op['address']); ?></textarea>
                    </div>

                    <!-- Hidden ID -->
                    <input type="hidden" name="id" value="<?php echo $op['id']; ?>">
                </div>

                <!-- Submit Button -->
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <div class="control-sidebar-bg"></div>

    <?php include 'Common/Footer.php' ?>
