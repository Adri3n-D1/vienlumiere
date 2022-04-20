
<!-- SECTION FORM -->
<div id="section-contact-form">
    <h2>Formulaire de contact</h2>
    <form action= <?php echo $_SERVER["PHP_SELF"]. '#section-contact-form' ?> method="POST">
        <div class="duo">
            <label class="small-display">Entrez votre prénom :</label>
            <label class="large-display">Prénom</label>
            <input class="<?php echo $stateUser['form-first-name'] ?>" type="text" id="form-first-name" name="form-first-name" value="<?php echo $valueUser['form-first-name'] ?>" placeholder="<?php echo $valueDefault['form-first-name'] ?>" <?php echo $disableOrNot ?> />
        </div>
        <div class="display-error">
            <p>
                <?php
                if ($displayError['form-first-name'])
                {
                    echo $errorInput['form-first-name'];
                }
                ?>
            </p>
        </div>

        <!--  -->
        <div class="duo">
            <label class="small-display">Entrez votre nom :</label>
            <label class="large-display">Nom</label>
            <input class="<?php echo $stateUser['form-last-name'] ?>"
            type="text" id="form-last-name" name="form-last-name" value="<?php echo $valueUser['form-last-name'] ?>" placeholder="<?php echo $valueDefault['form-last-name'] ?>" <?php echo $disableOrNot ?> />
        </div>
        <div class="display-error">
            <p>
                <?php
                if ($displayError['form-last-name'])
                {
                    echo $errorInput['form-last-name'];
                }
                ?>
            </p>
        </div>

        <!--  -->
        <div class="duo">
            <label class="small-display">Entrez votre téléphone :</label>
            <label class="large-display">Téléphone</label>
            <input class="<?php echo $stateUser['form-phone'] ?>" type="tel" id="form-phone" name="form-phone" value="<?php echo $valueUser['form-phone'] ?>" placeholder="<?php echo $valueDefault['form-phone'] ?>" <?php echo $disableOrNot ?> />
        </div>
        <div class="display-error">
            <p>
                <?php
                if ($displayError['form-phone'])
                {
                    echo $errorInput['form-phone'];
                }
                ?>
            </p>
        </div>

        <!--  -->
        <div class="duo">
            <label class="small-display">Entrez votre email :</label>
            <label class="large-display">Email</label>
            <input class="<?php echo $stateUser['form-email'] ?>" type="email" id="form-email" name="form-email" value="<?php echo $valueUser['form-email'] ?>" placeholder="<?php echo $valueDefault['form-email'] ?>" <?php echo $disableOrNot ?> />
        </div>
        <div class="display-error">
            <p>
                <?php
                if ($displayError['form-email'])
                {
                    echo $errorInput['form-email'];
                }
                ?>
            </p>
        </div>

        <!--  -->
        <div class="text-area">
            <label class="all-display">Entrez votre message</label>
            <textarea class="<?php echo $stateUser['form-message'] ?>" id="form-message" name="form-message"  placeholder="<?php echo $valueDefault['form-message'] ?>" <?php echo $disableOrNot ?> ><?php echo $valueUser['form-message'] ?></textarea>
        </div>
        <div class="display-error center">
            <p>
                <?php
                if ($displayError['form-message'])
                {
                    echo $errorInput['form-message'];
                }
                ?>
            </p>
        </div>

        <!--  -->
        <div class="btn-submit">
            <input type="submit" value="SUIVANT" <?php echo $disableOrNot ?> />
        </div>
        <div id="anchor-delivery-confirmation"></div>
    </form>
</div>