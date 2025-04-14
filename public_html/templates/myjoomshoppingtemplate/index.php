<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
  <meta charset="<?php echo $this->charSet; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.css"/>
</head>
<body>
  <div id="page">
    <header>
      <h1><?php echo $this->params->get('sitetitle'); ?></h1>
    </header>
    <nav>
      <jdoc:include type="modules" name="position-1" style="none" />
      <main>
        <jdoc:include type="component"/>
      </main>
      <footer>
        <jdoc:include type="modules" name="footer" style="none" />
      </footer>
    </nav>
  </div>
</body>
</html>
