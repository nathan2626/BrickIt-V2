<?php if(isset($_SESSION['messages'])): ?>
    <div class="msgSession">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<article class="listProductsTable">
    <table>
        <thead>
        <tr>
            <th colspan="3">Liste des produits</th>
            <th colspan="1">
                <a class="addProduct" type="button" href="index.php?controller=products&action=new">Ajouter un produit</a>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>#</td>
            <td>Nom</td>
            <td>Catégorie</td>
            <td>Action</td>
        </tr>

        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= htmlentities($product['id']); ?></td>
            <td><?= htmlentities($product['name']); ?></td>
            <td>
                <?= htmlentities($product['categories']);?>
            </td>
            <td>
                <a class="modifProduct" type="button" href="index.php?controller=products&action=edit&id=<?= $product['id'] ?>">Modifier</a>
                <a class="deleteProduct" type="button" href="index.php?controller=products&action=delete&id=<?= $product['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</article>