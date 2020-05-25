<?php require ('./templates/header.php');?>

<section id="intro">
    <div class="container">
        <h2 class="title">Intro</h2>
        <div class="content">
            <p class="text1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, ipsum. Lorem ipsum dolor sit amet.</p>
            <p class="text2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, debitis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum eveniet ipsum repellendus obcaecati, unde saepe veritatis suscipit tempore provident est.</p>
            <p class="text3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nisi ut unde obcaecati, rem atque explicabo odit repellendus repudiandae optio, facilis, dicta veritatis labore odio amet suscipit quidem enim dignissimos quas soluta minus saepe a iure dolores. Asperiores quaerat, totam autem officiis, dolorum aspernatur dolor ad maxime eveniet, possimus laboriosam maiores non nihil modi recusandae blanditiis iure nobis quis praesentium. Quae deleniti consectetur, hic tenetur possimus praesentium, nulla et sint fugit, assumenda quam maiores pariatur necessitatibus cumque. Sapiente quia esse dolorem dolorum corrupti, adipisci, quibusdam quam nihil laudantium explicabo corporis aliquam? Est non doloremque ex commodi consectetur? Dolores, earum architecto. ipsum, dolor sit amet consectetur adipisicing elit. Amet veritatis numquam esse, adipisci sed aliquam perferendis inventore. Officia dolore tempore qui beatae ullam asperiores iure ipsam aliquid, eligendi, incidunt tenetur.</p>
        </div>
        <div class="button">
            <a class="button__work" href="#">see my work</a>
            <a class="button__contact" href="#">contact me</a>
        </div>
    </div>
</section>

<section id="bio">
    <div class="container">
        <h2 class="title">Bio</h2>
        <div id="img__background"></div>
        <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime ea distinctio porro odit excepturi nesciunt iure mollitia inventore, corrupti saepe expedita tempore earum cum. Dolorem sunt illo labore quaerat architecto odit, eaque, neque quam vero, mollitia rerum consectetur repudiandae nobis recusandae sint! Est beatae necessitatibus enim aliquam labore fuga explicabo. ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugit deserunt eaque adipisci excepturi repellat optio consequuntur magnam non. Consequuntur.</p>
    
        <TABLE id="languageSkills" > 

        <CAPTION> Développement </CAPTION> 
            <TR> 
                <TH> Language </TH> 
                <TH> Note </TH> 
            </TR> 

            <?php foreach ($languageSkills as $key => $value) : ?>
            <TR> 
                <TD><?= $key ?></TD> 
                <TD><?= str_repeat('★', $value) ?></TD> 
            </TR> 
            <?php endforeach ?>

        </TABLE>

        <TABLE id="environmentSkills"> 

        <CAPTION> Technique </CAPTION> 
            <TR> 
                <TH> environnement </TH> 
                <TH> Note </TH> 
            </TR> 
            
            <?php foreach ($environmentSkills as $key => $value) : ?>
            <TR> 
                <TD><?= $key ?></TD> 
                <TD><?= str_repeat('★', $value) ?></TD> 
            </TR> 
            <?php endforeach ?>

        </TABLE>
    </div>
</section>

<section id="work">
    <h2 class="title">Work</h2>
    <div class="container">
        <?php foreach ($workPosts as $value) : ?>
            <article>
                <img src="./images/<?=$value['picture']?>" alt="">
                <h3><?= $value['title'] ?></h3>
                <p><?= $value['summary'] ?></p>
                <div class="ligne"></div>
                <a href="<?= $value['link'] ?>"><div class="button__article">Read more</div></a>
            </article>
        <?php endforeach ?>
    </div>
</section>

<section id="contact">
    <h2 class="title">Contact</h2>
    <div class="container">
        <form id="form" action="action.php" method="post">
            <p class="input__radio">Human<input type="radio" name="type" value="Human"></p>
            <p class="input__radio">Not sure<input type="radio" name="type" value="Not sure" checked></p>
            <p class="input__radio">Robot<input type="radio" name="type" value="Robot"></p>
            <p class="input__text">Subject</p>
            <select  class="input__select" name="subject">
                <option value="work">Work</option>
                <option value="work">Work</option>
                <option value="work">Work</option>
                <option value="work">Work</option>
            </select>

            <p class="input__text">Nickname</p><input class="input" type="text" name="Nickname" value="Your Nickname" />
            <p class="input__text">Email adress</p><input class="input" type="text" name="email" value="Your email"/>
            <p class="input__text">Message</p><textarea  class="input__textarea" name="message">Your message</textarea>
            <input class="button" type="submit" value="reset">
            <input class="button" type="submit" value="Send this message!">
        </form>
        <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, provident sapiente! Animi dolorem, ducimus voluptates distinctio repudiandae quibusdam minima qui a laboriosam voluptatibus maxime ullam, odit porro officia harum quisquam.</p>
    </div>
</section>
<?php require ('./templates/footer.php');?>