<?php
require_once("../Model/user.php");
$users = getUsers();
$title = "user list";

ob_start();
?>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Table user</h3>
            <div class="card-tools">
               
            
            </div>
        </div>

        <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Employe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user):?>
                        <tr>
                            <td><?=$user->id ?></td>
                            <td><?=$user->email ?></td>
                            <td><?=$user->password ?></td>
                            <td><?=$user->Nom ?></td>
                        </tr>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>

    </div>

</div>

<?php
$countent = ob_get_clean();
include('dashboard.php');
?> 