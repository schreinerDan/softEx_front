<!DOCTYPE html>
<html>
<head>
    <title>Supermercado App - Lista de Produtos</title>
    <!-- Adicione os links para os estilos e scripts necessários -->
</head>
<body>
    <h1>Lista de Produtos</h1>

    <ul>
        
        <?php foreach ($products as $product): ?>
            <li><?php echo $product->name ?> - R$ <?php echo $product->price; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Adicione os scripts necessários -->
</body>
</html>
