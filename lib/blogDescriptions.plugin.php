<?php
class blogDescriptionsPlugin extends blogPlugin // например, blogAkismetPlugin extends blogPlugin
{

        public function addShortDescriptionsHtml($params) 
        {
                $view = wa()->getView();
                $view->assign('post',$params);
                $content = $view->fetch($this->path.'/templates/actions/post/PostEdit.html');
                return array(
                        'toolbar' => $content,
                );
        }

        public function savePostShortDescriptions($params){
                $short_description = $_POST['text_before_cut'];
                $id = $params['id'];
                $model = new blogDescriptionsModel();
                $model->setDescription($id,$short_description);
                return true;
        }

        public function setDescriptionsAssets(){
                return "<link href=\"/wa-apps/{$this->info['app_id']}/plugins/{$this->info['id']}/css/descriptions.css\" rel=\"stylesheet\" type=\"text/css\" >";

        }
        // … остальные обработчики

}
?>