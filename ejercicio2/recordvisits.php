<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registrar usuarios en libro de visitas</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximumscale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <title>Registrar usuarios en libro de visitas</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximumscale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <div id="wrapping" class="clearfix">
            <section id="aligned">
                <input type="text" name="yourname" id="yourname" placeholder="(Tu nombre)" autocomplete="off" maxlength="40" tabindex="1" class="txtinput" />
                <input type="text" name="youraddress" id="youraddress" placeholder="(Tu
dirección)" autocomplete="off" maxlength="60" tabindex="2" class="txtinput" />
                <input type="tel" name="yourphone" id="yourphone" placeholder="(Tu número de
teléfono)" tabindex="4" maxlength="14" class="txtinput" />
                <input type="hidden" name="yourfile" id="yourfile" value="guestbook.txt" />
            </section>

            <section id="aside" class="clearfix">
                <section id="recipientcase">
                    <h3>Fecha de nacimiento:</h3>
                    <input type="date" name="yourbirthday" id="yourbirthday" placeholder="(Tu
fecha de nacimiento)" class="txtdate" />
                    <img src="jscalendar/image.png" id="imgcalendar" style="cursor: pointer;
border: 1px solid red; display: inline-block;" title="Ingrese la fecha" onmouseover="this.style.background='red';" onmouseout="this.style.background=''" /><br />
                    <script type="text/javascript">
                        Calendar.setup({
                            inputField: "yourbirthday", // ID of the input field
                            ifFormat: "%Y-%m-%d", // the date format
                            button: "imgcalendar", // ID of the button
                            singleClick: true
                        });
                    </script>
                </section>
            </section>
        </div>
        <section id="buttons">
            <input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Restaurar" />
            <input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Guardar" />
            <br style="clear:both;">
        </section>
        </form>
        </section>
        <?php
        ?>
        </body>

    </html>