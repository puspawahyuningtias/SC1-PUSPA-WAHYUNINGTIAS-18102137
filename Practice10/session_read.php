<!DOCTYPE html>
<html>

<head>
    <title>Session</title>
</head>

<body>
    <form action="session_process.php" method="post">
        <input type="text" name="kolom_input_session1" required /></br>
        <input type="text" name="kolom_input_session2" required /></br>
        <button type="submit">Simpan</button>
    </form>
    <?php session_start() ?>
    Session yang tersimpan 1: <?php echo isset($_SESSION['session_tersimpan1']) ? $_SESSION['session_tersimpan1'] : 'Session 1 Kosong' ?><br>
    Session yang tersimpan 2: <?php echo isset($_SESSION['session_tersimpan2']) ? $_SESSION['session_tersimpan2'] : 'Session 2 Kosong' ?>

</body>

</html>