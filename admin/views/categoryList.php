<article class="listCategoriesTable">
    <table>
        <thead>
        <tr>
            <th colspan="2">Liste des catégories</th>
            <th colspan="2">
                <a class="addCategory" type="button" href="categoryForm.php">Ajouter une catégorie</a>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>#</td>
            <td>Nom</td>
            <td>Description</td>
            <td>Action</td>
        </tr>
        <?php foreach($categories as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td><?= $category['description'] ?></td>
            <td>
                <a class="modifCategory" type="button" href="index.php?controller=categories&action=edit&id=<?= $category['id'] ?>">Modifier</a>
                <a class="deleteCategory" type="button" href="index.php?controller=categories&action=delete&id=<?= $category['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</article>