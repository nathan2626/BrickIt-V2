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
            <th colspan="5">Informations</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Prénom</td>
            <td>Nom</td>
            <td>Adresse</td>
        </tr>
        <tr>
            <td><?= $order['last_name']?></td>
            <td><?= $order['first_name']?></td>
            <td><?= $order['adress']?></td>
        </tr>
    </table>
</article>
<article class="listOrdersTable">
    <table>
    <thead>
    <tr>
        <th colspan="4">Récapitulatif de la commande</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Nom</td>
        <td>Quantité</td>
        <td>Prix</td>
        <td>Total</td>
    </tr>
    <tr>
        <td>le vaisseau blabla</td>
        <td>2</td>
        <td>19.99$</td>
        <td>39.98$</td>
    </tr>
    <tr>
        <td>le vaisseau blabla</td>
        <td>2</td>
        <td>19.99$</td>
        <td>39.98$</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <th colspan="3">Total de la commande</th>
        <th colspan="1">79.96$</th>
    </tr>
    </tfoot>
    </table>
</article>
