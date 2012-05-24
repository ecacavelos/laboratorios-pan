<!-- app/View/Users/index.ctp -->
<h1>Users</h1>
<table>
    <tr>
        <th>username</th>
        <th>password</th>
        <th>role</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['password']; ?></td>
        <td><?php echo $user['User']['role']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
