<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Пума и Пепа</title>
    <style type="text/css">
        body {
            background-color: #b0c4de;
            font-family: Geneva;
            color: navy;
        }

        table {
            border: 5px double darkslateblue;
        }
        TD, TH {
            padding: 5px;
            border: 1px solid #fff;
        }
        h1, h2 {
            font-family: Geneva;
        }
        h3 {
            font-style: italic;
        }

        ppepa {
            color: darkviolet;
            font-family: "American Typewriter";
        }
        ppuma {
            color: saddlebrown;
            font-family: "Comic Sans MS";
        }
    </style>
</head>
<body>
<h1 align="center"> Пума и Пепа </h1>
<h2 align="center"> Мы домашние коты</h2>


<table>
    <tr>
        <td>

            <img src="https://c1.staticflickr.com/3/2888/33834359766_3e8e8ff6cc.jpg" alt="ПумаПепа">
            <p>

            </p>
            <img src="https://c1.staticflickr.com/3/2940/33834359976_565d52c4e0.jpg" alt="Пепа">
            <p>

            </p>
            <img src="https://c1.staticflickr.com/3/2927/33834361686_434ddac266.jpg" alt="Пума">

        </td>
        <td>
            <h3>О нас.</h3>
            <ppepa>
                Я, Пепа, кошечка. Родилась не понятно где в сентябре 2015.<br>
                Белая и пушистая. Поэтому задралась вылизыватся - <br>
                кругом один пух.<br>
                Иногда меня колотит кот Пума, но он дурачок.<br>
                Особенно он умом повредился после того падения с балкона.<br>
            </ppepa>
            <p>

            </p>
            <ppuma>
                Я, Пума, кот. Родился в марте 2015, отца в глаза не видел.<br>
                Ночью меня фиг разглядишь, потому что черный.<br>
                Один раз я звезданулся с 6-го этажа с балкона.<br>
                Все в панике, а мне хоть бы хрен (Пепу не слушайте).<br>
                Теперь меня в узких кругах зовут Гагарин.<br>
            </ppuma>
            <p>
            <h3> Хобби. </h3>
            Их много у нас: <br>
            <ul>
                <li> спать</li>
                <li> есть</li>
                <li> дрыхнуть</li>
                <li> жрать</li>
                <li> валяться</li>
                <li> лакать</li>
                <li> ну и так, по мелочам</li>
            </ul>

            <p>
            <h3> Образование. </h3>
            Мы очень образованые коты.<br>
            Например, мы знаем редкую команду "Хулимяу!"<br>
            Это значит надо убегать и быстрее.<br>
            Когда-то нас учили ходить на унитаз. Но успехов было немного.<br>
            Хозяина это так злило, что он чуть сам не разучился.<br>
            Поэтому нам в конце концов поставили обычный <br>
            <del>человеческий</del>
            кошачий лоток с песком - <br>
            какое удовольствие покопать там.

        </td>
        <td>
            <h3> Контакты. </h3>
            По вопросам сотрудничества <br>
            писать Хозяину: <br>
            <a href="mailto:lukash77@gmail.com">lukash77@gmail.com</a> <br>
            Если пойдете в гости, <br>
            захватите вот это: <br>
            <a href="http://www.royal-canin.ru/catalog/product/indoor-long-hair-35/">Royal Canin</a> <br>
            А лучше принесите мышь, <br>
            живую, например, такую. <br>
            <img src="https://c1.staticflickr.com/8/7446/9698334635_b907632de5_t.jpg" alt="мышь"> <br>
            Давно хотим попробовать поймать. <br>
            Хозяева не дают, <br>
            говорят "а вдруг не поймаете".



        </td>
    </tr>
    <tr>
        <td colspan="3" align="right">
            <em> Страница создана Хозяином. Все права защищены. :) </em>
        </td>
    </tr>


</table>
<form action="form.php" method = "POST">
    <label for="firstName"> Your name: </label> <input type="text" id="firstName" name="firstName" placeholder="Input Your name"> <br>
    <label for="rating"> Please select rating </label>
    <select name="rating" id="rating">
        <option> 1 </option>
        <option> 2 </option>
        <option> 3 </option>
        <option> 4 </option>
        <option> 5 </option>
    </select> <br>
    Select Your Friend: <input type="radio" value="Murka" name="friend"> Murka | <input type="radio" value="Vasjka" name="friend"> Vasjka |
    <input type="radio" value="Mashka" name="friend"> Mashka <br>
    Please enter Your comments: <br>
    <textarea name="comments" rows="5" cols="50"></textarea> <br>
    <input type="reset" name="reset" value="Cancel">
    <input type="submit" name="submit" value="Send">

</form>


</body>
</html>