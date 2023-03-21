<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){

            if($post['id'] == $postId){
                $currentPost = $post;
            }

        }
    }
?>

    <main class="post-container">
        <div class="content-container">
            <h1 class="main-title"><?=$currentPost['title']?></h1>
            <p class="post-description"><?=$currentPost['description']?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio magni porro itaque odit voluptatibus! Placeat, enim facere. Excepturi, maiores, doloremque ex architecto perferendis nam, praesentium repellat officiis officia tenetur natus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sequi sed reiciendis facilis omnis dolore cupiditate aliquid corporis eaque officiis voluptatibus accusamus, doloremque commodi voluptatem fuga unde consequuntur excepturi dolor.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci repellat, ea unde debitis quibusdam quod illum iusto illo at itaque consequatur, dolore, modi ipsum soluta natus iure voluptate a mollitia?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nostrum aperiam, nemo doloribus consectetur ex qui repudiandae sequi. Illo, autem. Modi, magnam! Velit dolores ducimus blanditiis aliquid hic iusto doloremque!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex veniam natus eaque quas nisi a dolorem? Suscipit veniam aperiam, fugit architecto aut, mollitia recusandae alias magni placeat animi incidunt quam.
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio magni porro itaque odit voluptatibus! Placeat, enim facere. Excepturi, maiores, doloremque ex architecto perferendis nam, praesentium repellat officiis officia tenetur natus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sequi sed reiciendis facilis omnis dolore cupiditate aliquid corporis eaque officiis voluptatibus accusamus, doloremque commodi voluptatem fuga unde consequuntur excepturi dolor.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci repellat, ea unde debitis quibusdam quod illum iusto illo at itaque consequatur, dolore, modi ipsum soluta natus iure voluptate a mollitia?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nostrum aperiam, nemo doloribus consectetur ex qui repudiandae sequi. Illo, autem. Modi, magnam! Velit dolores ducimus blanditiis aliquid hic iusto doloremque!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex veniam natus eaque quas nisi a dolorem? Suscipit veniam aperiam, fugit architecto aut, mollitia recusandae alias magni placeat animi incidunt quam.
            </p>
        </div>
        <aside class="nav-container">
                <h3 class="tags-title">Tags</h3>
                <ul class="tag-list">
                    <?php foreach($currentPost['tags'] as $tag): ?>
                        <li><a href="#"><?=$tag?></a></li>
                    <?php endforeach; ?>
                </ul>
                <h3 class="categories-title">Categorias</h3>
                <ul class="categories-list">
                    <?php foreach($categories as $category): ?>
                        <li><a href="#"><?=$category?></a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>
    </main>

<?php include_once("templates/footer.php") ?>