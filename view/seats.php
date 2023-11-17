<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button.book-seats{
  display: inline-block;
  padding: 5px 20px;
  background: rgb(180, 206, 234,1);
  border-radius: 30px;
  margin-left:10px;
  color: rgba(23,63,110,1);
  text-decoration: none;
  transition:0.5s ease;
  border:none;
}
button.book-seats:hover{
    background: rgb(78, 95, 157,1);
  color: white;
}
    </style>
</head>
<body>
<?php if ($seats): ?>
        <h3>Available Seats</h3><br>
        <form method="post" action="<?php echo base_url('index.php/Home/bookSeats'); ?>">
            <?php foreach ($seats as $seat): ?>
                <?php if ($seat->is_available): ?>
                    <label>
                        <input type="checkbox" name="selectedSeats[]" value="<?php echo $seat->seat_number; ?>" <?php echo $seat->is_available ? '' : 'disabled';?>>
                        <?php echo $seat->seat_number; ?>
                    </label>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php if (count(array_filter(array_column($seats, 'is_available'))) > 0): ?>
                <input type="hidden" name="bus_name" value="<?php echo $seats[0]->bus_name; ?>">
                <button class="book-seats">
                    <?php echo 'Book seat'; ?>
                </button>
            <?php else: ?>
                <p>No available seats for the selected bus.</p>
            <?php endif; ?>
        </form>
    <?php else: ?>
        <p>No available seats for the selected bus.</p>
    <?php endif; ?>
</body>
</html>