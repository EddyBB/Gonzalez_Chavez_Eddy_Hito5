<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    public function indexDashboard()
    {
        $users = DB::table("users")
            ->select('id_usuario','name','email','dni','fechaNaci','numTlf')
            ->where('created_at', '>', now()->subDays(30)->endOfDay())->get();
        

        return view('dashboard', compact('users'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dni' => ['required', 'string', 'min:9'],
            'fechaNaci' => ['required', 'date'],
            'numTlf' => ['required', 'integer', 'min:9'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        //$user = User::create($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dni' => $request->dni,
            'fechaNaci' => $request->fechaNaci,
            'numTlf' => $request->numTlf,
            'password' => $request->password,
            'rol' => $request->rol,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'Usuario creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(User::$rulesProfile);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->dni = $request->dni;
        $user->fechaNaci = $request->fechaNaci;
        $user->numTlf = $request->numTlf;

        if (!empty($request->password)) {
            $user->password = $request->password;
        }

        if (!empty($request->rol)) {
            $user->rol = $request->rol;
        }

        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'Usuario editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'Usuario eliminado');
    }
}
