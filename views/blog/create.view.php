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