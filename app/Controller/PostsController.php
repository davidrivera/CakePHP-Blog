<?php
class PostsController extends AppController{
    public $helpers = array('Html','Form','Session');
    public $components = array('Session');

    public function index(){
        $this->set('posts', $this->Post->find('all'));
    }
    public function view($id = null){
        if(!$id){
            throw new NotFoundException(_('Invalid Post'));
        }

        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException(_('Invalid Post'));
        }
        $this->set('post',$post);
    }
    public function add(){
        if($this->request->is('post')){
            $this->Post->create();
            $this->Post->set($this->request->data);
            if($this->Post->validates()){
                if($this->Post->save($this->request->data)){
                    $this->Session->setFlash('Your Post Has been saved!','flash_good');
                    $this->redirect(array('action' => 'index'));
                }else{
                    $this->Session->setFlash('Unable to save your post.','flash_bad');
                }
            }else{
                $this->Session->setFlash('Please check the filed and resubmit the form','flash_bad');
            }
        }
    }
    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(_('Invalid Post'));
        }
        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException(_('Invalid Post'));
        }
        if($this->request->is('post') || $this->request->is('put')){
            $this->Post->id = $id;
            if($this->Post->validates()){
                if($this->Post->save($this->request->data)){
                    $this->Session->setFlash(__('Your post has been updated'),'flash_good');
                    $this->redirect(array('action' => 'index'));
                }else{
                    $this->Session->setFlash(__('Unable to update your post.'),'flash_bad');
                }
            }else{
                $this->Session->setFlash('Please check the filed and resubmit the form','flash_bad');
            }
        }
        if(!$this->request->data){
            $this->request->data = $post;
        }
    }
    public function delete($id){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        if($this->Post->delete($id)){
            $this->Session->setFlash('Post with id:'.$id.' has been deleted!','flash_good');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>
