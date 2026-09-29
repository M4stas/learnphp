<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="name">
        <label for="age">Age:</label>
        <input name="age" type="number" id="age" placeholder="age">
        <input type="submit" value="Send">
        <input type="reset" value="reset">
        <button>Submit</button>
    </form>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>