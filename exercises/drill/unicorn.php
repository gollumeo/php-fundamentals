<form action="" method="get">
    <label for="choice">Are you a Human, a Cat or a Unicorn?</label><br>
    <input type="radio" name="choice" value="human" required><label for="human">Human</label>
    <input type="radio" name="choice" value="cat" required><label for="cat">Cat</label>
    <input type="radio" name="choice" value="unicorn" required><label for="unicorn">Unicorn</label><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?
$human = '<img src="https://media1.giphy.com/media/l0HlVTNKhKnt52olG/giphy.gif?cid=790b76118e9946ff10162ad84d94e04f029782ad9b489cdb&rid=giphy.gif&ct=g">';
$cat = '<img src="https://media4.giphy.com/media/3oriO0OEd9QIDdllqo/giphy.gif?cid=ecf05e4701bo5jxxhsh3fzx73cs1wp06tmsucqgyiyzbls8y&rid=giphy.gif&ct=g">';
$unicorn = '<img src="https://media1.giphy.com/media/HULqwwF5tWKznstIEE/giphy.gif?cid=ecf05e47vooyri2zjz0ccmdlcxz8fbon463mpd2dg9ql4net&rid=giphy.gif&ct=g">';
if (isset($_GET['choice'])) {
    $choice = ($_GET['choice'] == "cat") ? $cat : (($_GET['choice'] == "unicorn") ? $unicorn : $human);
    echo $choice;
}