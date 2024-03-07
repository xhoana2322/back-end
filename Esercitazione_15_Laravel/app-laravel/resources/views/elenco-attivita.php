<?php   
require_once('header.php');
?>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">userID</th>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($posts as $key => $value): ?>
                <tr>
                    <td>
                        <?= $value->userID ?>
                    </td>
                    <td>
                        <?= $value->id ?>
                    </td>
                    <td>
                        <?= $value->title ?>
                    </td>
                    <td>
                        <?= $value->body ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>



<?php   
require_once('footer.php');
?>