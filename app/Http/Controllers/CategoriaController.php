<?php 
namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Facades\Redirect;
use DB; 

class CategoriaController extends Controller
{
   //creamos el metodo index para realizar una busqueda en los registros de 
   //categorias 
    public function index(Request $request)
    {
        if ($request)
        {
            //con el metodo trim eliminamos los espacios
            $sql = trim($request->get('buscarTexto'));
            $categorias = DB::table('categorias')->where('nombre', 'LIKE', '%'.$sql.'%')->orderBy('id','desc')->paginate(5);

            return view('categoria.index', ["categorias"=>$categorias,  "buscarTexto"=>$sql]);
        }
    }

    //creamos el metodo store para agregar registros de categorias
    public function store(Request $request)
    {
        //declaramos un objeto de la clase categoria 
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->condicion = '1';
        $categoria->save();

        return Redirect::to("categoria");
    }
    
    //creamos el metodo update para editar los registros de categorias
    public function update(Request $request)
    {
        //busca en la tabla de la base de datos el id que corresponda al dato que
        //estamos buscando
        $categoria = Categoria::findOrFail($request->id_categoria);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->condicion = '1';
        $categoria->save();

        return Redirect::to("categoria");
    }
    //Creamos el metodo destroy para cambiar el estado a los registros de categoria
    public function destroy(Request $request)
    {
        $categoria= Categoria::findOrFail($request->id_categoria);
        if ($categoria->condicion == "1") 
        { 
            $categoria->condicion = '0';
            $categoria->save();
            return Redirect::to("categoria");

        }else{

            $categoria->condicion = '1';
            $categoria->save();
            return Redirect::to("categoria");
        }
    }
}
