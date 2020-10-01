<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Birds'; ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/tufted-titmouse.jpg') ?>" />
      <h2>WNC Birds</h2>
      <p></p>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
      </tr>

<?php

$parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
$birds_array = $parser->parse();

?>
      <?php foreach($birds_array as $args) { ?>
        <?php $birds = new Birds($args); ?>
      <tr>
      <td><?php echo h($birds->commonName); ?></td>
        <td><?php echo h($birds->habitat); ?></td>
        <td><?php echo h($birds->food); ?></td>
        <td><?php echo h($birds->nest); ?></td>
        <td><?php echo h($birds->behavior); ?></td>
        <td><?php echo h($birds->conservation); ?></td>
        <td><?php echo h($birds->backyard); ?></td>
      </tr>
      <?php } ?>

    </table>
  </div>

</div>

