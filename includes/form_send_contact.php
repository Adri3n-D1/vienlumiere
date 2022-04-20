
<div id="section-contact-form-send">
    <h2>Validation du message</h2>
    <table>
        <tr>
            <td>Prénom</td>
            <td><?php echo $valueUser['form-first-name'] ?></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo $valueUser['form-last-name'] ?></td>
        </tr>
        <tr>
            <td>Téléphone</td>
            <td><?php echo $valueUser['form-phone'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $valueUser['form-email'] ?></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><?php echo $valueUser['form-message'] ?></td>
        </tr>
    </table>
    <form action="<?php echo $_SERVER['PHP_SELF'] . '#section-contact-form' ?>" method="POST">
        <!-- <input name="from-confirmation-page" type="hidden" value="true" /> -->
        <input name="form-first-name" type="hidden" value="<?php echo $valueUser['form-first-name'] ?>" />
        <input name="form-last-name" type="hidden" value="<?php echo $valueUser['form-last-name'] ?>" />
        <input name="form-phone" type="hidden" value="<?php echo $valueUser['form-phone'] ?>" />
        <input name="form-email" type="hidden" value="<?php echo $valueUser['form-email'] ?>" />
        <input name="form-message" type="hidden" value="<?php echo $valueUser['form-message'] ?>" />
        <div class="duo">
            <input class="btn-double" type="submit" name="form-btn-modify" value="Modifier" />
            <input class="btn-double" type="submit" name="form-btn-send" value="Envoyer"/>
        </div>
    </form>
</div>