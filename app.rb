class App < Sinatra::Base
  
  register Sinatra::AssetPack
  
  assets do
      serve '/js', :from => 'assets/javascripts'
      js :application, [
        '/js/*.js'
      ]
    
      serve '/css', :from => 'assets/stylesheets'
      css :application, [
        '/css/*.css'
       ]
       
      serve '/images', from: 'assets/images'
    
      js_compression :jsmin
      css_compression :sass
  end
  
  get '/' do
    erb :home
  end

end