<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>website | {% block title %}{% endblock %}</title>
  </head>
  <body>
    {% include 'templates/partials/messages.php' %}
    {% include 'templates/partials/navigation.php' %}
    {% block content %}{% endblock %}
  </body>
</html>