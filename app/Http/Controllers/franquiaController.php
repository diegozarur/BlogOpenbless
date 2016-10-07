<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class franquiaController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields*/


			$this->filter = \DataFilter::source(new \App\franquia);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Titulo');
        $this->grid->add('imagem', 'Imagem');
			$this->addStylesToGrid();

        
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        
	
			$this->edit = \DataEdit::source(new \App\franquia());

			$this->edit->label('Nossas Franquias');

			$this->edit->add('title', 'Titulo', 'text');
	        $this->edit->add('endereco', 'Endereço', 'text');
	        $this->edit->add('contato', 'Contato', 'text');
	        $this->edit->add('cresci', 'CRECI', 'text');
	        $this->edit->add('content', 'Apresentação', 'redactor');
	        $this->edit->add('imagem', 'Imagem', 'image')->move('uploads/');
	        $this->edit->add('color', 'Cor do Texto', 'colorpicker');
	        $this->edit->add('public', 'public', 'radiogroup')->option(0, 'Draft')->option(1, 'Ready');


       
        return $this->returnEditView();
    }    
}
