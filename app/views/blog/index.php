<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Blog Gönderileri index.php</h1>
    <?php if (!empty($blogs)) : ?>
        <ul>
            <?php foreach ($blogs as $blog) : ?>
                <li>
                    <h2><?php echo htmlspecialchars($blog['title']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($blog['content'])); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Henüz bir gönderi yok.</p>
    <?php endif; ?>
</body>
</html>
