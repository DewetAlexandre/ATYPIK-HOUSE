<?php
 
namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Categorie_logement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class CustomAuthController extends Controller
{
 
    public function index()
    {
        return view('auth.inscription_connexion');
    }  
    
    public function indexForgetMdp()
    {
        
        return view('auth.forget_mdp');
    } 

    public function indexNewMdp(Request $request)
    {
        
        $email = $request->input('email');
        if(User::where('email',$email)->first() == null){
            $request->session()->put('errorEmail', 'y');
            return view('auth.forget_mdp');
        }else {
            $request->session()->forget('errorEmail');
            $user = User::where('email',$email)->first();
            return view('auth.new_mdp',[
                'user' => $user
            ]);
        }

    } 

    public function changeMdp(Request $request, $id)
    {
        $pass = $request->validate([
            'mdp' => ['required',Password::min(8)->letters()->numbers()->mixedCase()->symbols()],
        ]);

        $confirmMdp = $request->input('confirm-mdp');
        if($pass['mdp'] !== null){
            if($pass['mdp'] === $confirmMdp){
                
                $user = User::findOrFail($id);
                $user->password = Hash::make($pass['mdp']);
                $user->update();
                $request->session()->forget('error');                
                return view('auth.confirm_mdp');
            } else {
                $request->session()->put('error','y');
                return view('auth.new_mdp');
            }
        } else {
            $request->session()->put('error','y');
            return view('auth.new_mdp');            
        }
        

        
    } 
 
    public function customLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'login' => 'email ou mot de passe érroné',
            ])->onlyInput('email');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user, $request->has('souvenir'));

        $categories = Categorie_logement::all();
        $user = User::all();
        $best4Avis = Avis::where('note','>','3')->orderBy('note','desc')->limit(4)->get();
        return view('accueil',[
            'categories' => $categories,
            'user' => $user,
            'best4Avis' => $best4Avis
        ]);
 

    }
       
 
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'prenom' => 'bail|required|min:2|max:255',
            'nom' => 'bail|required|min:2|max:255',
            'email' => 'bail|required|email|unique:App\Models\User,email',
            'password' => ['required',Password::min(8)->letters()->numbers()->mixedCase()->symbols()],
            'confirm-mdp' => 'required|same:password'
        ]);
            
        $data = $request->all();

        $this->create($data);
        $request->session()->put('inscr','on');
        return redirect("/auth");//->withSuccess('have signed-in')
    }
 
 
    public function create(array $data)
    {
      return User::create([
        'prenom' => $data['prenom'],
        'nom' => $data['nom'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }     
 
    public function signOut() {

        Session::flush();
        Auth::logout();
   
        return Redirect('/auth');
    }

    public function test()
    {
        dd(Auth::check());
    }
}

