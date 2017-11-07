 <form action="/comments" method="POST">
     {{ csrf_field() }}
     <input type="text" name="text" value="basket">
      <input type="hidden" name="hi" value="hidde">
     <input type="submit" value="Отправить">
 </form>