<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>



<?php
// get recipe data from database
$query = "SELECT * FROM recipe WHERE id = {$_GET['id']}";
// recipe_name = {$_GET['$recipe_name']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $id variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?> 

<div class="">
    <div class="">
        <h1 class="">Edit Recipe</h1>
    </div>
    <div class="">
        <form action="<?php echo site_url(); ?>/_includes/process-edit-recipe.php" method="POST">

            <div class="editrecipeInput">
                <label for="">Name Of Recipe</label>
                <input type="text" name="recipe_name"
                    value="<?php echo $recipe['recipe_name']; ?>">
            </div>
            <div class="editrecipeInput">
                <label for="">Servings</label>
                <input type="text" name="servings"
                    value="<?php echo $recipe['servings']; ?>">
            </div>
            <div class="editrecipeInput">
                <label for="">Cook Time</label>
                <input type="text" name="cook_time"
                    value="<?php echo $recipe['cook_time']; ?>">
            </div>
            <div class="editrecipeInput">
                <label for="">Prep Time</label>
                <input type="text" name="prep_time"
                    value="<?php echo $recipe['prep_time']; ?>">
            </div>
            <div class="editrecipeInput">
                <label for="">Description</label>
                <input type="text" name="description"
                    value="<?php echo $recipe['description']; ?>">
            </div>
            <div class="editrecipeInput">
                <label for="">Ingredients</label>
                <input type="text" name="ingredients"
                    value="<?php echo $recipe['ingredients']; ?>">
            </div>
            <div class="editrecipeInput">
                <label for="">Directions</label>
                <input type="text" name="directions"
                    value="<?php echo $recipe['directions']; ?>">
            </div>

            <input class=" " type="submit" value="Update">

            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        </form>
        
    </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';