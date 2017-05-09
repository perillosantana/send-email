<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  <title>Envio de E-mail</title>

  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/handlebars.min.js"></script>
  <script src="js/handlebars-utils.js"></script>

  <style>
    body {
      padding: 15px 0;
      font-family: "Calibri",sans-serif;
      font-size: 12pt;
    }

    textarea {
      height: 350px!important;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <form class="form-horizontal">
          <fieldset>
            <legend>Envio de E-mail HTML</legend>

            <div class="form-group">
              <label class="col-md-2 control-label" for="email">E-mails</label>

              <div class="col-md-10">
                <input id="email" name="email" type="text" placeholder="E-mails" class="form-control input-md" required="" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="selectJson">Tipo do Json</label>

              <div class="col-md-10">
                <select name="selectJson" id="selectJson" class="form-control">
                  <option value="">Selecione</option>
                  <option value="1">Com Orders</option>
                  <option value="2">Sem orders</option>
                  <option value="3">Com GiftList</option>
                  <option value="4">Apenas Order</option>
                  <option value="customized">Customizado</option>
                </select>
              </div>
            </div>

            <div class="form-group json-customized hide">
              <label class="col-md-2 control-label" for="jsonCustomized">Customizado</label>

              <div class="col-md-10">
                <textarea class="form-control" id="jsonCustomized" name="jsonCustomized"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="emailHtml">Html E-mail</label>

              <div class="col-md-10">
                <textarea class="form-control" id="emailHtml" name="emailHtml"></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-offset-2">
                <button type="submit" class="btn btn-primary" style="width: 100%;">ENVIAR</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>


  <div class="result"></div>

  <script id="address-template" type="text/x-handlebars-template"></script>
</body>
</html>