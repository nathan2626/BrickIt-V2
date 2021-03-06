<?php if(isset($_SESSION['messages'])): ?>
    <div class="msgSession">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<article class="listUsersTable">
    <table>
        <thead>
        <tr>
            <th colspan="4">Liste des utilisateurs</th>
            <th colspan="2">
                <a class="addUser" type="button" href="index.php?controller=users&action=new">Ajouter un utilisateur</a>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>#</td>
            <td>Prénom</td>
            <td>Nom</td>
            <td>Email</td>
            <td>Admin</td>
            <td>Action</td>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlentities($user['id']); ?></td>
                <td><?= htmlentities($user['first_name']); ?></td>
                <td><?= htmlentities($user['last_name']); ?></td>
                <td><?= htmlentities($user['email']); ?></td>
                <td><?= htmlentities($user['is_admin']); ?></td>
                <td>
                    <a class="modifUser" type="button" href="index.php?controller=users&action=edit&id=<?= $user['id'] ?>">Modifier</a>
                    <a class="deleteUser" type="button" href="index.php?controller=users&action=delete&id=<?= $user['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</article>