<<<<<<< HEAD
<?php loadPartial('head') ?>
<?php loadPartial('navbar') ?>


    <!-- FORM -->
     <section class="form-wrapper">
         <form id="create-form">
             <h2>Create a new post</h2>
             <p>Write what is in your mind ...</p>
             
             <input type="text" placeholder="Title ...">
             <input type="text" placeholder="Category ...">
             <textarea placeholder="Content ..."></textarea>
          </form>
      </section>

    <footer id="footer">
        <h2>DevAcademy</h2>
        <p>Find your ideal course with us</p>
        <p>Copyright 2024</p>
    </footer>




</body>

</html>


<?php loadPartial('footer') ?>
=======
<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>

<section id="form-container">
      <!-- FORM -->
      <form class="createForm">
        <input type="text" placeholder="Title ..." />
        <input type="Category" placeholder="Category ..." />
        <textarea placeholder="Post content ..."></textarea>
        <button type="submit">Send</button>
      </form>
    </section>

    <?= loadPartial('footer') ?>
>>>>>>> c9b4d6ccceb0207ea455c750a938fe0710d06494
