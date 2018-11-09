<div class="container">
    <!--        <ul class="nav">-->
    <!--        --><?php
    //            $a = 1;
    //            $b = 4;
    //
    //        while( $a < $b ) { ?>
    <!---->
    <!--        <li class="nav-item">-->
    <!--            <a class="nav-link" href="?page=--><?//= $a;?><!--">Link</a>-->
    <!--        </li>-->
    <!---->
    <!--            --><?php
    //            $a++;
    //        }
    //        ?>
    <!--        </ul>-->
    <?php

    $array = [
        1 => [
            'image' => 'https://fakeimg.pl/250x100/',
            'title' => 'List-based media object',
            'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
        ],
        2 => [
            'image' => 'https://fakeimg.pl/250x100/',
            'title' => 'List-based media object',
            'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
        ],
        3 => [
            'image' => 'https://fakeimg.pl/250x100/',
            'title' => 'List-based media object',
            'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
        ]
    ];

    ?>
    <ul class="list-unstyled">
        <?php

        foreach ($array as $item) {

//                echo "<pre>";
//                    var_dump($item['image']);
//                echo "</pre>";
//                die();

            ?>

            <li class="media my-4">
                <img class="mr-3" src="<?= $item['image']?>" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><?= $item['title']?></h5>
                    <?= $item['content']?>
                </div>
            </li>

            <?php
        }

        ?>
    </ul>

</div>