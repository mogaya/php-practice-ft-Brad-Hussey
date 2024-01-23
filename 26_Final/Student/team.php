<?php
define("TITLE", "Team | Frankline's Fine Dining");

include('includes/header.php');
?>
<div id="team-members" class="cf">
    <h1>Our Team at Flanklines</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi est unde, ducimus dolore praesentium illum similique harum mollitia assumenda iure, ullam, quasi laborum aspernatur voluptate aliquam ipsa itaque atque earum?</p>
    <hr>

    <?php
    foreach ($teamMembers as $member) {
    ?>
        <div class="memberTeam">
            <img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
            <h2><?php echo $member['name']; ?></h2>
            <p><?php echo $member['bio']; ?></p>

        </div>
        <!-- member -->
        <hr>

    <?php
    }
    ?>
</div>
<!-- team-members -->

<?php include('includes/footer.php'); ?>