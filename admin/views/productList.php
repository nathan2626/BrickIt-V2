<article class="listProductsTable">
    <table>
        <thead>
        <tr>
            <th colspan="3">Liste des produits</th>
            <th colspan="1">
                <a class="addProduct" type="button" href="productForm.php">Ajouter un produit</a>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>#</td>
            <td>Titre</td>
            <td>Catégorie</td>
            <td>Action</td>
        </tr>

        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td>
<!--                    --><?php //foreach ($productCategories as $productCategory){
//                        $productCategory['name'];
//
//                    }?>
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