Your patient is:
<?php echo htmlspecialchars($_POST['firstName']); ?>.
<?php echo htmlspecialchars($_POST['lastName']); ?>.
<?php echo htmlspecialchars($_POST['newPatient']); ?>.
<?php echo (int)$_POST['age']; ?> years old.
