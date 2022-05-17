http://jsfiddle.net/SchmalzyB/bpEFe/1/

https://stackoverflow.com/questions/20979062/bootstrap-right-column-on-top-on-mobile-view

279

Use Column ordering to accomplish this.

col-md-push-6 will "push" the column to the right 6 and col-md-pull-6 will "pull" the column to the left on "md" or greater view-ports. On any smaller view-ports the columns will be in normal order again.

I think what throws people off, is that you have to put B above A in your HTML. There may be a different way to do this where A can go above B in the HTML, but I'm not sure how to do it...

DEMO

<div class="row">
  <div class="col-md-6 col-md-push-6">B</div>
  <div class="col-md-6 col-md-pull-6">A</div>
</div>
view-port >= md

|A|B|
view-port < md

|B|
|A|