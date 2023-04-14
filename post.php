<?php
include_once("templates/header.php");

if(isset($_GET["id"])){

  $postId = $_GET["id"];
  $currentPost;

  foreach($posts as $post){

    if($post["id"] == $postId){
      $currentPost = $post;
    }
        }}

?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?=$currentPost["title"]?></h1>
      <p id="post-description"><?=$currentPost["description"]?></p>
      <div class="img-container">
        <img src="img/<?=$currentPost["img"]?>" alt="<?=$currentPost["img"]?>">
      </div>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta reprehenderit porro perferendis fugiat perspiciatis hic non molestiae maxime vero, explicabo odio fugit quam aliquid quaerat, laboriosam commodi adipisci itaque. Voluptatibus!
      Possimus, aliquam? Nam vero illo ducimus odit aut ea fugiat corrupti cum repellendus voluptates laborum impedit provident numquam maiores at delectus illum voluptas, possimus reiciendis nobis! Velit nemo saepe nihil!
      Quibusdam dicta soluta dolorem optio provident, quidem dolores laboriosam inventore placeat ex, blanditiis distinctio necessitatibus nulla ipsum reprehenderit atque voluptates suscipit eius totam itaque minima? Consequatur aspernatur nisi voluptate ipsam?
      Perspiciatis ad facilis ipsa quisquam, voluptatem cumque iste, delectus architecto pariatur suscipit dignissimos. Earum, expedita perspiciatis amet corporis qui dolores cum saepe voluptatum dolor! Officiis cumque culpa corporis doloribus quas!
      Voluptate molestias temporibus fugit eos labore quisquam eveniet blanditiis suscipit architecto totam nemo accusamus alias, atque rerum quae dolorem non earum? Inventore doloribus pariatur officiis autem deleniti, ab dolorem iste.</p>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta reprehenderit porro perferendis fugiat perspiciatis hic non molestiae maxime vero, explicabo odio fugit quam aliquid quaerat, laboriosam commodi adipisci itaque. Voluptatibus!
      Possimus, aliquam? Nam vero illo ducimus odit aut ea fugiat corrupti cum repellendus voluptates laborum impedit provident numquam maiores at delectus illum voluptas, possimus reiciendis nobis! Velit nemo saepe nihil!
      Quibusdam dicta soluta dolorem optio provident, quidem dolores laboriosam inventore placeat ex, blanditiis distinctio necessitatibus nulla ipsum reprehenderit atque voluptates suscipit eius totam itaque minima? Consequatur aspernatur nisi voluptate ipsam?
      Perspiciatis ad facilis ipsa quisquam, voluptatem cumque iste, delectus architecto pariatur suscipit dignissimos. Earum, expedita perspiciatis amet corporis qui dolores cum saepe voluptatum dolor! Officiis cumque culpa corporis doloribus quas!
      Voluptate molestias temporibus fugit eos labore quisquam eveniet blanditiis suscipit architecto totam nemo accusamus alias, atque rerum quae dolorem non earum? Inventore doloribus pariatur officiis autem deleniti, ab dolorem iste.</p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
            <?php foreach($currentPost["tags"] as $tag):?>
              <li><a href="#"><?= $tag ?></a></li>
              <?php endforeach;?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $category):?>
              <li><a href="#"><?= $category ?></a></li>
              <?php endforeach;?>
            </ul>
  </aside>
  </main>
 
<?php
include_once("templates/footer.php")
?>