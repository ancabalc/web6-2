/*global $*/
function cleanInput(e) {
  // forbidden input
  var badInput= /\s/;      // any whitespace character (space, tab, form feed, and so on)

  if (e.key.match(badInput))
    return false;

  return true;
}
