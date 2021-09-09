<?php

// 1.都道府県の配列
$areas = [
    '北海道',
    '青森県',
    '岩手県',
    '宮城県',
    '秋田県',
];

// 2.フルーツの配列
$fruits = [
    'apple' => 'りんご',
    'banana' => 'バナナ',
    'orange' => 'オレンジ',
    'grape' => 'ぶどう',
    'peach' => 'もも',
    'pineapple' => 'パイナップル'
];

// 3.身長・体重の配列
$menber = [
    'A' => ['height' => 150, 'weight' => 45],
    'B' => ['height' => 160, 'weight' => 55],
    'C' => ['height' => 180, 'weight' => 80],
    'D' => ['height' => 170, 'weight' => 70],
    'E' => ['height' => 175, 'weight' => 65]
];

// 4.投稿の配列
$posts = [
    ['A33D5BDF','0番目の配列です'],
    ['A3F994AB','1番目の配列です'],
    ['F7914A3F','2番目の配列です'],
    ['A20A19AD','3番目の配列です'],
    ['0BBF9BA5','4番目の配列です']
];

$post_info = []; //4-3

?>
​
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP task</title>
    <style>
    body{
        width:70%;
        margin:0 auto;
    }
    section{
        padding-bottom: 30px;
        border-bottom:2px solid gray;
    }
    </style>
</head>
<body>
    <h1>PHP カリキュラム外課題</h1>
    <!-- 問１ -->
    <section>
        <h2>1.都道府県</h2>
        <label for="area">都道府県を選択してください：</label>
        <select name="area" id="area">
            <?php foreach ($areas as $area) : ?>
                <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
            <?php endforeach; ?>
        </select>
    </section>

    <!-- 問２ -->
    <section>
        <h2>2.フルーツ</h2>
            <?php foreach($fruits as $fruit => $value) : ?>
                <p><?php echo $value; ?></p>
            <?php endforeach; ?>
    </section>

    <!-- 問３ -->

    <section>
        <h2>3.身長・体重</h2>
        <?php foreach ($menber as $name => $value) : ?>
            <p><?php echo $name . 'さん ' . $value['height'] . 'cm ' . $value['weight'] . 'kg'; ?></p>
        <?php endforeach; ?>
    </section>

    <!-- 問４ -->
    <section>
        <h2>4.投稿</h2>
        <div>
            <h3>4-1</h3>
            <p></p>
            <p><?php echo $posts[2][1]; ?> </p>
            <hr>
        </div>
        <div>
            <h3>4-2</h3>
            <?php foreach($posts as $post => $value) : ?>
                <p><?php echo $value[0]; ?></p>
            <?php endforeach; ?>
            <hr>
        </div>
        <div>
            <h3>4-3</h3>
            <p>※print_rで$post_infoの中身を出力</p>
            <?php foreach($posts as $post => $value) :?>
                <?php if($value[0] === "A20A19AD"): ?>
                    <?php $post_info = $posts[$post] ?>
                    <p><?php print_r($post_info); ?></p>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>