<?php if(isset($_SESSION['messages'])): ?>
    <div class="msgSession">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<article class="listOrdersTable">
    <table>
        <thead>
        <tr>
            <th colspan="4">Liste des commandes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>#</td>
            <td>Nom/Prénom</td>
            <td>Total</td>
            <td>Action</td>
        </tr>
        <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $order['id']?></td>
            <td><?= $order['first_name']?>/<?= $order['last_name']?></td>
            <td><?= $order['price']?></td>
            <td>
                <a class="detailsOrder" type="button" href="index.php?controller=orders&action=detail&id=<?= $order['id']?>">Détails</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</article>