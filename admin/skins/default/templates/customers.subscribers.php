<form action="{$VAL_SELF}" method="post" enctype="multipart/form-data">
   <div id="general" class="tab_content">
      <h3>{$LANG.navigation.nav_subscribers}</h3>
      <table>
         <thead>
            <th></th>
            <th>{$LANG.common.email}</th>
            <th></th>
         </thead>
         <tbody class="list">
            {foreach from=$SUBSCRIBERS item=subscriber}
            <tr>
               <td><input type="checkbox" name="rem_subscriber[{$subscriber.subscriber_id}]" value="1" class="subscribers"></td>
               <td>{$subscriber.email}</td>
               <td align="center"><a href="?_g=customers&node=subscribers&delete={$subscriber.subscriber_id}" class="delete" title="{$LANG.notification.confirm_delete}"><img src="{$SKIN_VARS.admin_folder}/skins/{$SKIN_VARS.skin_folder}/images/delete.png" alt="{$LANG.common.delete}"></a></td>
            </tr>
            {/foreach}
         </tbody>
         <tfooter>
            <tr>
               <td><img src="{$SKIN_VARS.admin_folder}/skins/{$SKIN_VARS.skin_folder}/images/select_all.gif" alt=""></td>
               <td>
                  <a href="#" class="check-all" rel="subscribers">{$LANG.form.check_uncheck}</a>
                  <select name="multi_subscriber_action">
                     <option value="">{$LANG.form.with_selected}</option>
                     <option value="delete">{$LANG.common.remove}</option>
                  </select>
                  <input type="submit" value="{$LANG.common.go}" name="go">
               </td>
            </tr>
         </tfooter>
      </table>
      <p>{$PAGINATION}</p>
      
   </div>
   <div id="import" class="tab_content">
   <h3>{$LANG.newsletter.import_subscribers}</h3>
   <fieldset>
         <legend>{$LANG.newsletter.import_subscribers}</legend>
         <div><label for="emails">{$LANG.newsletter.email_list}</label><br><textarea name="subscribers" class="textbox" placeholder="{$LANG.newsletter.email_list_placeholder}"></textarea></div>
      </fieldset>
   </div>
   <div class="form_control">
      <input type="hidden" name="newsletter[newsletter_id]" value="{$NEWSLETTER.newsletter_id}">
      <input type="hidden" name="previous-tab" id="previous-tab" value="">
      <input type="submit" value="{$LANG.common.save}">
   </div>
   <input type="hidden" name="token" value="{$SESSION_TOKEN}">
</form>