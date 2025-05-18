<?php include 'inc/header.php'; ?>
<?php
    // $feedback = [
    //     [
    //         'id' => '1',
    //         'name' => 'E',
    //         'email' => 'e@gmail.com',
    //         'body' => 'Traversy Media is OK',
    //     ],
    //     [
    //         'id' => '2',
    //         'name' => 'U',
    //         'email' => 'u@gmail.com',
    //         'body' => 'Traversy Media is not OK',
    //     ],
    //     [
    //         'id' => '3',
    //         'name' => 'D',
    //         'email' => 'd@gmail.com',
    //         'body' => 'Traversy Media Gooood',
    //     ],
    // ];

    $sql = 'SELECT * FROM feedback';
    $result = mysqli_query($conn, $sql); //$conn in database.php
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<h2>Feedback</h2>

<?php foreach($feedback as $item):?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?php echo $item['body']; ?>
            <div class="text-secondary mt-2">
                By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
            </div>
        </div>
    </div>
<?php endforeach ; ?>

<!-- <div class="card my-3">
    <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
    </div>
</div>

<div class="card my-3">
    <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
    </div>
</div> -->
<?php include 'inc/footer.php'; ?>