<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="main``c.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">LiftR</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Workers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Training Efficacy
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          <h2>Score Data</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Aquasition Time</th>
                  <th>Worker ID</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody>
<!--?php include("GetRawScoresAsHTML.php"); ?-->

                <tr>
                  <td>1</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>63.1852006048473</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>79.3109542339676</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>76.4444850919882</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>64.8467055775748</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>86.6166993340661</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>53.3190807108652</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>77.1205461489129</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>78.7989147980183</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>88.864192052796</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>70.0672185387372</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>97.00316533669</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>91.2863328311361</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>73.2700915322059</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>81.9415776644137</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>73.6954757069877</td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>77.4985628461883</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>72.3412129476553</td>
                </tr>
                <tr>
                  <td>18</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>63.9326640437858</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>74.0295114772289</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>74.9268815449648</td>
                </tr>
                <tr>
                  <td>21</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>73.5210983271418</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>74.2504166395311</td>
                </tr>
                <tr>
                  <td>23</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>92.7611002583029</td>
                </tr>
                <tr>
                  <td>24</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>78.3384381507259</td>
                </tr>
                <tr>
                  <td>25</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>57.1693187941776</td>
                </tr>
                <tr>
                  <td>26</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>83.4212197869667</td>
                </tr>
                <tr>
                  <td>27</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>94.0393560390855</td>
                </tr>
                <tr>
                  <td>28</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>98.1658045460249</td>
                </tr>
                <tr>
                  <td>29</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>77.0853182623545</td>
                </tr>
                <tr>
                  <td>30</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>75.0735961142771</td>
                </tr>
                <tr>
                  <td>31</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>85.025234814452</td>
                </tr>
                <tr>
                  <td>32</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>85.5216907040306</td>
                </tr>
                <tr>
                  <td>33</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>105.239347954961</td>
                </tr>
                <tr>
                  <td>34</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>69.1610884343911</td>
                </tr>
                <tr>
                  <td>35</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>62.0034458131096</td>
                </tr>
                <tr>
                  <td>36</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>55.3032554297224</td>
                </tr>
                <tr>
                  <td>37</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>80.3017243154209</td>
                </tr>
                <tr>
                  <td>38</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>78.3631852639338</td>
                </tr>
                <tr>
                  <td>39</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>96.2283267298454</td>
                </tr>
                <tr>
                  <td>40</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>75.7334126153349</td>
                </tr>
                <tr>
                  <td>41</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>68.4181884615727</td>
                </tr>
                <tr>
                  <td>42</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>80.3391025372136</td>
                </tr>
                <tr>
                  <td>43</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>74.4395672944613</td>
                </tr>
                <tr>
                  <td>44</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>78.7629156386855</td>
                </tr>
                <tr>
                  <td>45</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>77.2899908415439</td>
                </tr>
                <tr>
                  <td>46</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>66.0433600409672</td>
                </tr>
                <tr>
                  <td>47</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>69.7178838065894</td>
                </tr>
                <tr>
                  <td>48</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>71.0998674731635</td>
                </tr>
                <tr>
                  <td>49</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>73.1412013286586</td>
                </tr>
                <tr>
                  <td>50</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>97.4652756800441</td>
                </tr>
                <tr>
                  <td>51</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>61.049353529608</td>
                </tr>
                <tr>
                  <td>52</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>71.4997744910667</td>
                </tr>
                <tr>
                  <td>53</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>67.56515645402</td>
                </tr>
                <tr>
                  <td>54</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>77.6568572248762</td>
                </tr>
                <tr>
                  <td>55</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>80.239970294199</td>
                </tr>
                <tr>
                  <td>56</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>67.4242661193307</td>
                </tr>
                <tr>
                  <td>57</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>79.855936466657</td>
                </tr>
                <tr>
                  <td>58</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>84.0093043241783</td>
                </tr>
                <tr>
                  <td>59</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>72.0455875965738</td>
                </tr>
                <tr>
                  <td>60</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>78.4395551897478</td>
                </tr>
                <tr>
                  <td>61</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>88.9948324230494</td>
                </tr>
                <tr>
                  <td>62</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>79.3171584062886</td>
                </tr>
                <tr>
                  <td>63</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>85.9782491823434</td>
                </tr>
                <tr>
                  <td>64</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>77.4086635705266</td>
                </tr>
                <tr>
                  <td>65</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>93.7553691318347</td>
                </tr>
                <tr>
                  <td>66</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>75.4216633748403</td>
                </tr>
                <tr>
                  <td>67</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>98.7732703677542</td>
                </tr>
                <tr>
                  <td>68</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>77.5482739130973</td>
                </tr>
                <tr>
                  <td>69</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>72.2983161280356</td>
                </tr>
                <tr>
                  <td>70</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>53.9317206619378</td>
                </tr>
                <tr>
                  <td>71</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>89.4357057258955</td>
                </tr>
                <tr>
                  <td>72</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>85.0674182583182</td>
                </tr>
                <tr>
                  <td>73</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>68.2237559991917</td>
                </tr>
                <tr>
                  <td>74</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>85.449747566579</td>
                </tr>
                <tr>
                  <td>75</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>92.2270772488734</td>
                </tr>
                <tr>
                  <td>76</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>68.1908023156583</td>
                </tr>
                <tr>
                  <td>77</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>70.3482694941401</td>
                </tr>
                <tr>
                  <td>78</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>87.8807932486388</td>
                </tr>
                <tr>
                  <td>79</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>79.7385454290987</td>
                </tr>
                <tr>
                  <td>80</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>67.7662240119377</td>
                </tr>
                <tr>
                  <td>81</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>99.5002755648566</td>
                </tr>
                <tr>
                  <td>82</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>88.7880902704904</td>
                </tr>
                <tr>
                  <td>83</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>69.8409457975411</td>
                </tr>
                <tr>
                  <td>84</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>80.8599327911694</td>
                </tr>
                <tr>
                  <td>85</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>78.2131523419341</td>
                </tr>
                <tr>
                  <td>86</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>72.5816575323044</td>
                </tr>
                <tr>
                  <td>87</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>94.3187166077302</td>
                </tr>
                <tr>
                  <td>88</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>109.046807433907</td>
                </tr>
                <tr>
                  <td>89</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>73.899220349209</td>
                </tr>
                <tr>
                  <td>90</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>42.9078054506839</td>
                </tr>
                <tr>
                  <td>91</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>71.9275358148348</td>
                </tr>
                <tr>
                  <td>92</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>103.412252997426</td>
                </tr>
                <tr>
                  <td>93</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>93.788412793837</td>
                </tr>
                <tr>
                  <td>94</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>74.2199339786833</td>
                </tr>
                <tr>
                  <td>95</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>73.0326673288971</td>
                </tr>
                <tr>
                  <td>96</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>73.2246253128114</td>
                </tr>
                <tr>
                  <td>97</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>92.874310503527</td>
                </tr>
                <tr>
                  <td>98</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>85.8237818207424</td>
                </tr>
                <tr>
                  <td>99</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>67.7770173199954</td>
                </tr>
                <tr>
                  <td>100</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>68.0861308251786</td>
                </tr>
                <tr>
                  <td>101</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>65.4366493061469</td>
                </tr>
                <tr>
                  <td>102</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>59.8174060038915</td>
                </tr>
                <tr>
                  <td>103</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>85.8199474757159</td>
                </tr>
                <tr>
                  <td>104</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>75.1150733486841</td>
                </tr>
                <tr>
                  <td>105</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>60.8727128424236</td>
                </tr>
                <tr>
                  <td>106</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>65.8325408597677</td>
                </tr>
                <tr>
                  <td>107</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>70.3297852195013</td>
                </tr>
                <tr>
                  <td>108</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>68.9228416992679</td>
                </tr>
                <tr>
                  <td>109</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>80.3244956277909</td>
                </tr>
                <tr>
                  <td>110</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>79.508185838707</td>
                </tr>
                <tr>
                  <td>111</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>85.3606489187571</td>
                </tr>
                <tr>
                  <td>112</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>86.5931167628177</td>
                </tr>
                <tr>
                  <td>113</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>66.5335577563079</td>
                </tr>
                <tr>
                  <td>114</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>56.7098808222365</td>
                </tr>
                <tr>
                  <td>115</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>64.6625239551618</td>
                </tr>
                <tr>
                  <td>116</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>81.0164754480911</td>
                </tr>
                <tr>
                  <td>117</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>48.3382501744921</td>
                </tr>
                <tr>
                  <td>118</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>81.8182807937725</td>
                </tr>
                <tr>
                  <td>119</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>89.5104614570083</td>
                </tr>
                <tr>
                  <td>120</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>79.5797614083607</td>
                </tr>
                <tr>
                  <td>121</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>87.5423580008778</td>
                </tr>
                <tr>
                  <td>122</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>72.2514687881561</td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>65.5436568723393</td>
                </tr>
                <tr>
                  <td>124</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>84.4720429135695</td>
                </tr>
                <tr>
                  <td>125</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>86.3837641925745</td>
                </tr>
                <tr>
                  <td>126</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>84.3708040015347</td>
                </tr>
                <tr>
                  <td>127</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>92.0460392613621</td>
                </tr>
                <tr>
                  <td>128</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>88.0154822580518</td>
                </tr>
                <tr>
                  <td>129</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>91.2934493907792</td>
                </tr>
                <tr>
                  <td>130</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>95.8149250955313</td>
                </tr>
                <tr>
                  <td>131</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>81.397045429979</td>
                </tr>
                <tr>
                  <td>132</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>90.3319471900232</td>
                </tr>
                <tr>
                  <td>133</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>79.2496955643585</td>
                </tr>
                <tr>
                  <td>134</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>56.006340764301</td>
                </tr>
                <tr>
                  <td>135</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>75.2881706734856</td>
                </tr>
                <tr>
                  <td>136</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>63.1417379264015</td>
                </tr>
                <tr>
                  <td>137</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>58.9142670444959</td>
                </tr>
                <tr>
                  <td>138</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>71.1699972848294</td>
                </tr>
                <tr>
                  <td>139</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>53.4064663157724</td>
                </tr>
                <tr>
                  <td>140</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>70.1868275614258</td>
                </tr>
                <tr>
                  <td>141</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>60.5524731590559</td>
                </tr>
                <tr>
                  <td>142</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>81.709974993238</td>
                </tr>
                <tr>
                  <td>143</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>79.085642371035</td>
                </tr>
                <tr>
                  <td>144</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>68.7210560208849</td>
                </tr>
                <tr>
                  <td>145</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>83.276918486236</td>
                </tr>
                <tr>
                  <td>146</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>63.4761535450358</td>
                </tr>
                <tr>
                  <td>147</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>65.7716640701961</td>
                </tr>
                <tr>
                  <td>148</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>58.648715872819</td>
                </tr>
                <tr>
                  <td>149</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>75.8801478186672</td>
                </tr>
                <tr>
                  <td>150</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>66.0274114179134</td>
                </tr>
                <tr>
                  <td>151</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>70.6691742276382</td>
                </tr>
                <tr>
                  <td>152</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>83.768490514541</td>
                </tr>
                <tr>
                  <td>153</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>55.32480583083</td>
                </tr>
                <tr>
                  <td>154</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>62.4587377776978</td>
                </tr>
                <tr>
                  <td>155</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>75.9490803389463</td>
                </tr>
                <tr>
                  <td>156</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>79.6444396657632</td>
                </tr>
                <tr>
                  <td>157</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>73.3964218482554</td>
                </tr>
                <tr>
                  <td>158</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>76.5473555299289</td>
                </tr>
                <tr>
                  <td>159</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>78.9033342187107</td>
                </tr>
                <tr>
                  <td>160</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>85.3386130880886</td>
                </tr>
                <tr>
                  <td>161</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>75.9266210904079</td>
                </tr>
                <tr>
                  <td>162</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>67.9149390335793</td>
                </tr>
                <tr>
                  <td>163</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>70.5389600971923</td>
                </tr>
                <tr>
                  <td>164</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>63.1697985512395</td>
                </tr>
                <tr>
                  <td>165</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>83.813006709203</td>
                </tr>
                <tr>
                  <td>166</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>79.3732105132271</td>
                </tr>
                <tr>
                  <td>167</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>89.8699528206323</td>
                </tr>
                <tr>
                  <td>168</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>84.869926847067</td>
                </tr>
                <tr>
                  <td>169</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>79.4679370785683</td>
                </tr>
                <tr>
                  <td>170</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>92.51501847437</td>
                </tr>
                <tr>
                  <td>171</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>82.2332655598537</td>
                </tr>
                <tr>
                  <td>172</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>80.8651248512927</td>
                </tr>
                <tr>
                  <td>173</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>65.0558237667157</td>
                </tr>
                <tr>
                  <td>174</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>88.7871047381484</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>56.6628545422506</td>
                </tr>
                <tr>
                  <td>176</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>92.3287605486733</td>
                </tr>
                <tr>
                  <td>177</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>65.758579292442</td>
                </tr>
                <tr>
                  <td>178</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>87.2286747973704</td>
                </tr>
                <tr>
                  <td>179</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>56.3278771216277</td>
                </tr>
                <tr>
                  <td>180</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>52.1125401013163</td>
                </tr>
                <tr>
                  <td>181</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>79.3451917675512</td>
                </tr>
                <tr>
                  <td>182</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>96.6160538257958</td>
                </tr>
                <tr>
                  <td>183</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>71.518706265784</td>
                </tr>
                <tr>
                  <td>184</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>74.9985114160948</td>
                </tr>
                <tr>
                  <td>185</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>103.330496890389</td>
                </tr>
                <tr>
                  <td>186</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>69.9140625252164</td>
                </tr>
                <tr>
                  <td>187</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>62.9084302968475</td>
                </tr>
                <tr>
                  <td>188</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>65.9556784696412</td>
                </tr>
                <tr>
                  <td>189</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>68.4452800087808</td>
                </tr>
                <tr>
                  <td>190</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>90.3757159733789</td>
                </tr>
                <tr>
                  <td>191</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>62.6192724803487</td>
                </tr>
                <tr>
                  <td>192</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>79.0908242032315</td>
                </tr>
                <tr>
                  <td>193</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>105.659201577449</td>
                </tr>
                <tr>
                  <td>194</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>54.4069688797636</td>
                </tr>
                <tr>
                  <td>195</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>84.4881374745364</td>
                </tr>
                <tr>
                  <td>196</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>76.0816200718704</td>
                </tr>
                <tr>
                  <td>197</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>67.6537478017496</td>
                </tr>
                <tr>
                  <td>198</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>64.3863477064252</td>
                </tr>
                <tr>
                  <td>199</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>67.5722147859271</td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>61.8067535135607</td>
                </tr>
                <tr>
                  <td>201</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>84.4297280768118</td>
                </tr>
                <tr>
                  <td>202</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>83.169247201764</td>
                </tr>
                <tr>
                  <td>203</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>73.145789314562</td>
                </tr>
                <tr>
                  <td>204</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>57.3611024249204</td>
                </tr>
                <tr>
                  <td>205</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>69.7870741988788</td>
                </tr>
                <tr>
                  <td>206</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>75.5772733960512</td>
                </tr>
                <tr>
                  <td>207</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>61.130652069938</td>
                </tr>
                <tr>
                  <td>208</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>72.0619590756459</td>
                </tr>
                <tr>
                  <td>209</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>106.872517075032</td>
                </tr>
                <tr>
                  <td>210</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>70.2359665693035</td>
                </tr>
                <tr>
                  <td>211</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>65.9060248475626</td>
                </tr>
                <tr>
                  <td>212</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>84.6722451770056</td>
                </tr>
                <tr>
                  <td>213</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>62.8595495829278</td>
                </tr>
                <tr>
                  <td>214</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>62.7339655819055</td>
                </tr>
                <tr>
                  <td>215</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>65.8548009320236</td>
                </tr>
                <tr>
                  <td>216</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>86.6536409911202</td>
                </tr>
                <tr>
                  <td>217</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>81.2160772020188</td>
                </tr>
                <tr>
                  <td>218</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>40.3646999122817</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>67.0235981121819</td>
                </tr>
                <tr>
                  <td>220</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>78.9679631978034</td>
                </tr>
                <tr>
                  <td>221</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>56.0436716607673</td>
                </tr>
                <tr>
                  <td>222</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>95.6822475124603</td>
                </tr>
                <tr>
                  <td>223</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>73.378046631771</td>
                </tr>
                <tr>
                  <td>224</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>71.1181142341428</td>
                </tr>
                <tr>
                  <td>225</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>83.3280366946781</td>
                </tr>
                <tr>
                  <td>226</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>101.256619087188</td>
                </tr>
                <tr>
                  <td>227</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>72.5421188169957</td>
                </tr>
                <tr>
                  <td>228</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>65.9111853850848</td>
                </tr>
                <tr>
                  <td>229</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>81.1614762723462</td>
                </tr>
                <tr>
                  <td>230</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>87.8733167386564</td>
                </tr>
                <tr>
                  <td>231</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>55.566209101662</td>
                </tr>
                <tr>
                  <td>232</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>77.6683982857812</td>
                </tr>
                <tr>
                  <td>233</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>81.3615469611839</td>
                </tr>
                <tr>
                  <td>234</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>93.0228110934143</td>
                </tr>
                <tr>
                  <td>235</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>67.4646651148024</td>
                </tr>
                <tr>
                  <td>236</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>55.8600852657348</td>
                </tr>
                <tr>
                  <td>237</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>71.7220754315465</td>
                </tr>
                <tr>
                  <td>238</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>79.1257379457675</td>
                </tr>
                <tr>
                  <td>239</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>74.3588464918517</td>
                </tr>
                <tr>
                  <td>240</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>75.2159967529139</td>
                </tr>
                <tr>
                  <td>241</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>75.3184659559388</td>
                </tr>
                <tr>
                  <td>242</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>77.3643762006959</td>
                </tr>
                <tr>
                  <td>243</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>94.2989269609305</td>
                </tr>
                <tr>
                  <td>244</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>91.9503044247866</td>
                </tr>
                <tr>
                  <td>245</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>75.0468995084355</td>
                </tr>
                <tr>
                  <td>246</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>55.5691568672598</td>
                </tr>
                <tr>
                  <td>247</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>71.1105592101893</td>
                </tr>
                <tr>
                  <td>248</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>74.9442265570679</td>
                </tr>
                <tr>
                  <td>249</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>76.9432382838903</td>
                </tr>
                <tr>
                  <td>250</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>81.5151473914707</td>
                </tr>
                <tr>
                  <td>251</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>78.7521923072774</td>
                </tr>
                <tr>
                  <td>252</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>96.0187071956555</td>
                </tr>
                <tr>
                  <td>253</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>75.544442631329</td>
                </tr>
                <tr>
                  <td>254</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>86.7027873965302</td>
                </tr>
                <tr>
                  <td>255</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>56.449602545908</td>
                </tr>
                <tr>
                  <td>256</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>55.2812477196026</td>
                </tr>
                <tr>
                  <td>257</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>82.470945748172</td>
                </tr>
                <tr>
                  <td>258</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>77.4547298729489</td>
                </tr>
                <tr>
                  <td>259</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>74.2619973794613</td>
                </tr>
                <tr>
                  <td>260</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>62.5085837265228</td>
                </tr>
                <tr>
                  <td>261</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>63.4125312421512</td>
                </tr>
                <tr>
                  <td>262</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>59.9969001671921</td>
                </tr>
                <tr>
                  <td>263</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>81.5509457212803</td>
                </tr>
                <tr>
                  <td>264</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>67.7401823578822</td>
                </tr>
                <tr>
                  <td>265</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>74.2088465327201</td>
                </tr>
                <tr>
                  <td>266</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>87.3159444815832</td>
                </tr>
                <tr>
                  <td>267</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>55.7660402313647</td>
                </tr>
                <tr>
                  <td>268</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>87.2852534919063</td>
                </tr>
                <tr>
                  <td>269</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>64.2227275543583</td>
                </tr>
                <tr>
                  <td>270</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>60.8813217019492</td>
                </tr>
                <tr>
                  <td>271</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>85.9521915696577</td>
                </tr>
                <tr>
                  <td>272</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>77.5240091239662</td>
                </tr>
                <tr>
                  <td>273</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>77.5820555909069</td>
                </tr>
                <tr>
                  <td>274</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>55.9330798982293</td>
                </tr>
                <tr>
                  <td>275</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>75.8533734605475</td>
                </tr>
                <tr>
                  <td>276</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>84.6064195748038</td>
                </tr>
                <tr>
                  <td>277</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>79.0521262494082</td>
                </tr>
                <tr>
                  <td>278</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>78.3695432150808</td>
                </tr>
                <tr>
                  <td>279</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>87.0821406684961</td>
                </tr>
                <tr>
                  <td>280</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>79.2600753820342</td>
                </tr>
                <tr>
                  <td>281</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>68.9799487499376</td>
                </tr>
                <tr>
                  <td>282</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>58.7719544810971</td>
                </tr>
                <tr>
                  <td>283</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>71.6567829866664</td>
                </tr>
                <tr>
                  <td>284</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>65.6767626345035</td>
                </tr>
                <tr>
                  <td>285</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>69.0532661021661</td>
                </tr>
                <tr>
                  <td>286</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>81.074495447366</td>
                </tr>
                <tr>
                  <td>287</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>73.7012235371983</td>
                </tr>
                <tr>
                  <td>288</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>74.8453874741456</td>
                </tr>
                <tr>
                  <td>289</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>71.9745367640136</td>
                </tr>
                <tr>
                  <td>290</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>100.298901665385</td>
                </tr>
                <tr>
                  <td>291</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>78.5916474288718</td>
                </tr>
                <tr>
                  <td>292</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>81.2618418982619</td>
                </tr>
                <tr>
                  <td>293</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>67.2766368137401</td>
                </tr>
                <tr>
                  <td>294</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>102.849548213685</td>
                </tr>
                <tr>
                  <td>295</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>59.5168082228833</td>
                </tr>
                <tr>
                  <td>296</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>67.029161495248</td>
                </tr>
                <tr>
                  <td>297</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>101.719659638123</td>
                </tr>
                <tr>
                  <td>298</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>58.0145992283427</td>
                </tr>
                <tr>
                  <td>299</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>96.0763925247626</td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>91.1825446663533</td>
                </tr>
                <tr>
                  <td>301</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>75.5489900979824</td>
                </tr>
                <tr>
                  <td>302</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>75.2530340622017</td>
                </tr>
                <tr>
                  <td>303</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>53.5919543568558</td>
                </tr>
                <tr>
                  <td>304</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>95.0384432778595</td>
                </tr>
                <tr>
                  <td>305</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>78.8865689529899</td>
                </tr>
                <tr>
                  <td>306</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>74.2625323168919</td>
                </tr>
                <tr>
                  <td>307</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>62.8852135728296</td>
                </tr>
                <tr>
                  <td>308</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>77.9265504022487</td>
                </tr>
                <tr>
                  <td>309</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>67.7490698760654</td>
                </tr>
                <tr>
                  <td>310</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>82.9252442891375</td>
                </tr>
                <tr>
                  <td>311</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>79.8511420725681</td>
                </tr>
                <tr>
                  <td>312</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>65.9134787191119</td>
                </tr>
                <tr>
                  <td>313</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>100.894429852293</td>
                </tr>
                <tr>
                  <td>314</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>88.948897239664</td>
                </tr>
                <tr>
                  <td>315</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>104.242977880859</td>
                </tr>
                <tr>
                  <td>316</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>86.2345046994374</td>
                </tr>
                <tr>
                  <td>317</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>68.9413795069168</td>
                </tr>
                <tr>
                  <td>318</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>69.1832711795772</td>
                </tr>
                <tr>
                  <td>319</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>67.6509347688325</td>
                </tr>
                <tr>
                  <td>320</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>50.7515293185173</td>
                </tr>
                <tr>
                  <td>321</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>100.414699037072</td>
                </tr>
                <tr>
                  <td>322</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>90.059850612342</td>
                </tr>
                <tr>
                  <td>323</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>91.7574630500591</td>
                </tr>
                <tr>
                  <td>324</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>94.2513197330243</td>
                </tr>
                <tr>
                  <td>325</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>86.8424541309855</td>
                </tr>
                <tr>
                  <td>326</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>70.877206106707</td>
                </tr>
                <tr>
                  <td>327</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>56.0814945805751</td>
                </tr>
                <tr>
                  <td>328</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>71.8531890950208</td>
                </tr>
                <tr>
                  <td>329</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>96.2283530501452</td>
                </tr>
                <tr>
                  <td>330</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>69.1862167684388</td>
                </tr>
                <tr>
                  <td>331</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>79.4257446577649</td>
                </tr>
                <tr>
                  <td>332</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>73.6087848994831</td>
                </tr>
                <tr>
                  <td>333</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>67.7235796476976</td>
                </tr>
                <tr>
                  <td>334</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>76.2432483670363</td>
                </tr>
                <tr>
                  <td>335</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>72.8882059559749</td>
                </tr>
                <tr>
                  <td>336</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>76.4053746293032</td>
                </tr>
                <tr>
                  <td>337</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>90.8749112653464</td>
                </tr>
                <tr>
                  <td>338</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>65.9046714973452</td>
                </tr>
                <tr>
                  <td>339</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>83.1776473049213</td>
                </tr>
                <tr>
                  <td>340</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>104.921542354943</td>
                </tr>
                <tr>
                  <td>341</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>53.0716575058876</td>
                </tr>
                <tr>
                  <td>342</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>70.1920764988831</td>
                </tr>
                <tr>
                  <td>343</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>81.8220082035746</td>
                </tr>
                <tr>
                  <td>344</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>78.3780557585907</td>
                </tr>
                <tr>
                  <td>345</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>79.4399771536907</td>
                </tr>
                <tr>
                  <td>346</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>55.4150051714564</td>
                </tr>
                <tr>
                  <td>347</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>85.71598139443</td>
                </tr>
                <tr>
                  <td>348</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>80.6157254858829</td>
                </tr>
                <tr>
                  <td>349</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>83.6390955132369</td>
                </tr>
                <tr>
                  <td>350</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>89.9502100392777</td>
                </tr>
                <tr>
                  <td>351</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>80.4601628213472</td>
                </tr>
                <tr>
                  <td>352</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>76.924550367494</td>
                </tr>
                <tr>
                  <td>353</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>102.292278984736</td>
                </tr>
                <tr>
                  <td>354</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>65.7386533403502</td>
                </tr>
                <tr>
                  <td>355</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>90.5903143617454</td>
                </tr>
                <tr>
                  <td>356</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>79.1197312065871</td>
                </tr>
                <tr>
                  <td>357</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>67.1004722724034</td>
                </tr>
                <tr>
                  <td>358</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>75.4441364123335</td>
                </tr>
                <tr>
                  <td>359</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>83.7594063509623</td>
                </tr>
                <tr>
                  <td>360</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>70.5994329731665</td>
                </tr>
                <tr>
                  <td>361</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>62.4751005459776</td>
                </tr>
                <tr>
                  <td>362</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>82.0463918943333</td>
                </tr>
                <tr>
                  <td>363</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>70.4943345152455</td>
                </tr>
                <tr>
                  <td>364</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>72.2615999597836</td>
                </tr>
                <tr>
                  <td>365</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>64.3760034857346</td>
                </tr>
                <tr>
                  <td>366</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>89.2994128097552</td>
                </tr>
                <tr>
                  <td>367</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>95.4861932092254</td>
                </tr>
                <tr>
                  <td>368</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>63.9039817137734</td>
                </tr>
                <tr>
                  <td>369</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>85.7876586973858</td>
                </tr>
                <tr>
                  <td>370</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>72.2729506951901</td>
                </tr>
                <tr>
                  <td>371</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>88.126076103923</td>
                </tr>
                <tr>
                  <td>372</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>88.6810346732741</td>
                </tr>
                <tr>
                  <td>373</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>61.6798733476708</td>
                </tr>
                <tr>
                  <td>374</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>92.2383964784798</td>
                </tr>
                <tr>
                  <td>375</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>75.2438738420313</td>
                </tr>
                <tr>
                  <td>376</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>103.219006457478</td>
                </tr>
                <tr>
                  <td>377</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>63.7556552509536</td>
                </tr>
                <tr>
                  <td>378</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>67.9195686247248</td>
                </tr>
                <tr>
                  <td>379</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>57.9139820317362</td>
                </tr>
                <tr>
                  <td>380</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>86.046427286303</td>
                </tr>
                <tr>
                  <td>381</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>76.7976897478575</td>
                </tr>
                <tr>
                  <td>382</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>66.5818721014634</td>
                </tr>
                <tr>
                  <td>383</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>73.1781897887327</td>
                </tr>
                <tr>
                  <td>384</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>73.5420565155879</td>
                </tr>
                <tr>
                  <td>385</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>68.6565254709782</td>
                </tr>
                <tr>
                  <td>386</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>77.6737027554876</td>
                </tr>
                <tr>
                  <td>387</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>62.5445316791729</td>
                </tr>
                <tr>
                  <td>388</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>69.1460947243702</td>
                </tr>
                <tr>
                  <td>389</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>89.2308351051752</td>
                </tr>
                <tr>
                  <td>390</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>82.7308999824937</td>
                </tr>
                <tr>
                  <td>391</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>75.3753033463273</td>
                </tr>
                <tr>
                  <td>392</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>71.3160053812984</td>
                </tr>
                <tr>
                  <td>393</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>77.7757729264011</td>
                </tr>
                <tr>
                  <td>394</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>73.1806965902899</td>
                </tr>
                <tr>
                  <td>395</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>71.379754495488</td>
                </tr>
                <tr>
                  <td>396</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>71.7944494733665</td>
                </tr>
                <tr>
                  <td>397</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>76.0588730673824</td>
                </tr>
                <tr>
                  <td>398</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>70.1196803564428</td>
                </tr>
                <tr>
                  <td>399</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>67.7913402261212</td>
                </tr>
                <tr>
                  <td>400</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>61.7165582586156</td>
                </tr>
                <tr>
                  <td>401</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>77.9685953865103</td>
                </tr>
                <tr>
                  <td>402</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>70.4752929052516</td>
                </tr>
                <tr>
                  <td>403</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>79.4566322068487</td>
                </tr>
                <tr>
                  <td>404</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>79.0655921906518</td>
                </tr>
                <tr>
                  <td>405</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>67.7423088968922</td>
                </tr>
                <tr>
                  <td>406</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>66.7915330280414</td>
                </tr>
                <tr>
                  <td>407</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>73.9133696014288</td>
                </tr>
                <tr>
                  <td>408</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>71.9051593274123</td>
                </tr>
                <tr>
                  <td>409</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>79.1640965124921</td>
                </tr>
                <tr>
                  <td>410</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>67.7515938719576</td>
                </tr>
                <tr>
                  <td>411</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>79.6254301125548</td>
                </tr>
                <tr>
                  <td>412</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>95.5917736368045</td>
                </tr>
                <tr>
                  <td>413</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>81.5815766931722</td>
                </tr>
                <tr>
                  <td>414</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>76.0710637462466</td>
                </tr>
                <tr>
                  <td>415</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>88.2815683977572</td>
                </tr>
                <tr>
                  <td>416</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>71.5695003758482</td>
                </tr>
                <tr>
                  <td>417</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>94.4825014472005</td>
                </tr>
                <tr>
                  <td>418</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>68.908157585123</td>
                </tr>
                <tr>
                  <td>419</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>69.9779393469408</td>
                </tr>
                <tr>
                  <td>420</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>69.6253131011562</td>
                </tr>
                <tr>
                  <td>421</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>79.985032795607</td>
                </tr>
                <tr>
                  <td>422</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>77.8379701775856</td>
                </tr>
                <tr>
                  <td>423</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>81.0438460793332</td>
                </tr>
                <tr>
                  <td>424</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>95.2215657611702</td>
                </tr>
                <tr>
                  <td>425</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>63.4901597419259</td>
                </tr>
                <tr>
                  <td>426</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>75.8922446529478</td>
                </tr>
                <tr>
                  <td>427</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>81.2118677193446</td>
                </tr>
                <tr>
                  <td>428</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>73.1210220820357</td>
                </tr>
                <tr>
                  <td>429</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>81.2780874017749</td>
                </tr>
                <tr>
                  <td>430</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>81.2229076983877</td>
                </tr>
                <tr>
                  <td>431</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>70.7304262348981</td>
                </tr>
                <tr>
                  <td>432</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>66.7334403342147</td>
                </tr>
                <tr>
                  <td>433</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>58.214066258526</td>
                </tr>
                <tr>
                  <td>434</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>73.0387911008167</td>
                </tr>
                <tr>
                  <td>435</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>79.3685327337839</td>
                </tr>
                <tr>
                  <td>436</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>63.6839293815274</td>
                </tr>
                <tr>
                  <td>437</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>62.9683714522641</td>
                </tr>
                <tr>
                  <td>438</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>70.3513458912175</td>
                </tr>
                <tr>
                  <td>439</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>95.728620728421</td>
                </tr>
                <tr>
                  <td>440</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>91.0915992662976</td>
                </tr>
                <tr>
                  <td>441</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>66.8061536239944</td>
                </tr>
                <tr>
                  <td>442</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>66.2810310900228</td>
                </tr>
                <tr>
                  <td>443</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>61.3913679134883</td>
                </tr>
                <tr>
                  <td>444</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>60.6745278753021</td>
                </tr>
                <tr>
                  <td>445</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>60.6082285181763</td>
                </tr>
                <tr>
                  <td>446</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>70.6603500407774</td>
                </tr>
                <tr>
                  <td>447</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>69.9890979957944</td>
                </tr>
                <tr>
                  <td>448</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>74.8619330475594</td>
                </tr>
                <tr>
                  <td>449</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>75.203221632781</td>
                </tr>
                <tr>
                  <td>450</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>82.9533459112523</td>
                </tr>
                <tr>
                  <td>451</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>64.7095236432502</td>
                </tr>
                <tr>
                  <td>452</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>83.2833931951735</td>
                </tr>
                <tr>
                  <td>453</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>75.2341724446668</td>
                </tr>
                <tr>
                  <td>454</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>65.7772717439394</td>
                </tr>
                <tr>
                  <td>455</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>75.3914519918055</td>
                </tr>
                <tr>
                  <td>456</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>71.4821245417631</td>
                </tr>
                <tr>
                  <td>457</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>54.434356099854</td>
                </tr>
                <tr>
                  <td>458</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>76.4703493312625</td>
                </tr>
                <tr>
                  <td>459</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>88.3218946579482</td>
                </tr>
                <tr>
                  <td>460</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>84.0607947713506</td>
                </tr>
                <tr>
                  <td>461</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>69.7223270837366</td>
                </tr>
                <tr>
                  <td>462</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>77.4560453947794</td>
                </tr>
                <tr>
                  <td>463</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>78.2585281540055</td>
                </tr>
                <tr>
                  <td>464</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>56.7572175165284</td>
                </tr>
                <tr>
                  <td>465</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>84.3814179488961</td>
                </tr>
                <tr>
                  <td>466</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>65.4116957432745</td>
                </tr>
                <tr>
                  <td>467</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>55.9852083655182</td>
                </tr>
                <tr>
                  <td>468</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>63.8829465046514</td>
                </tr>
                <tr>
                  <td>469</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>74.5833480622917</td>
                </tr>
                <tr>
                  <td>470</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>93.7133597509232</td>
                </tr>
                <tr>
                  <td>471</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>79.871140573749</td>
                </tr>
                <tr>
                  <td>472</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>53.033935069584</td>
                </tr>
                <tr>
                  <td>473</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>87.1087202719822</td>
                </tr>
                <tr>
                  <td>474</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>72.1840662454395</td>
                </tr>
                <tr>
                  <td>475</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>90.0201179064825</td>
                </tr>
                <tr>
                  <td>476</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>91.1796719020987</td>
                </tr>
                <tr>
                  <td>477</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>79.168345964314</td>
                </tr>
                <tr>
                  <td>478</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>87.6613733016632</td>
                </tr>
                <tr>
                  <td>479</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>60.0808577626294</td>
                </tr>
                <tr>
                  <td>480</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>83.1794035600115</td>
                </tr>
                <tr>
                  <td>481</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>85.2298670578877</td>
                </tr>
                <tr>
                  <td>482</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>79.1433107674031</td>
                </tr>
                <tr>
                  <td>483</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>77.3025238358641</td>
                </tr>
                <tr>
                  <td>484</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>68.4354430655565</td>
                </tr>
                <tr>
                  <td>485</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>73.1640941073898</td>
                </tr>
                <tr>
                  <td>486</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>67.5513700901328</td>
                </tr>
                <tr>
                  <td>487</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>71.9107748343974</td>
                </tr>
                <tr>
                  <td>488</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>68.2561576927807</td>
                </tr>
                <tr>
                  <td>489</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>76.07070337854</td>
                </tr>
                <tr>
                  <td>490</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>83.5026981296917</td>
                </tr>
                <tr>
                  <td>491</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>68.9945871740369</td>
                </tr>
                <tr>
                  <td>492</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>55.9915469763726</td>
                </tr>
                <tr>
                  <td>493</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>104.971045095388</td>
                </tr>
                <tr>
                  <td>494</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>60.6678882192557</td>
                </tr>
                <tr>
                  <td>495</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>66.7981671703673</td>
                </tr>
                <tr>
                  <td>496</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>73.4771770732124</td>
                </tr>
                <tr>
                  <td>497</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>90.49602508775</td>
                </tr>
                <tr>
                  <td>498</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>55.2132938171579</td>
                </tr>
                <tr>
                  <td>499</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>59.0017263009681</td>
                </tr>
                <tr>
                  <td>500</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>76.5558125603999</td>
                </tr>
                <tr>
                  <td>501</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>62.7923316298136</td>
                </tr>
                <tr>
                  <td>502</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>89.1189928744789</td>
                </tr>
                <tr>
                  <td>503</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>92.4197256331949</td>
                </tr>
                <tr>
                  <td>504</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>57.2304679379249</td>
                </tr>
                <tr>
                  <td>505</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>70.9039280290069</td>
                </tr>
                <tr>
                  <td>506</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>85.2613524665552</td>
                </tr>
                <tr>
                  <td>507</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>64.7508564605396</td>
                </tr>
                <tr>
                  <td>508</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>100.00313641051</td>
                </tr>
                <tr>
                  <td>509</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>53.3242134794692</td>
                </tr>
                <tr>
                  <td>510</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>96.5107756671418</td>
                </tr>
                <tr>
                  <td>511</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>73.9442774727882</td>
                </tr>
                <tr>
                  <td>512</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>116.346000585393</td>
                </tr>
                <tr>
                  <td>513</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>62.1411600640748</td>
                </tr>
                <tr>
                  <td>514</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>77.5310429245859</td>
                </tr>
                <tr>
                  <td>515</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>67.6340715326037</td>
                </tr>
                <tr>
                  <td>516</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>69.0317202999353</td>
                </tr>
                <tr>
                  <td>517</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>85.9047320110913</td>
                </tr>
                <tr>
                  <td>518</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>67.62782627347</td>
                </tr>
                <tr>
                  <td>519</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>62.9192732700098</td>
                </tr>
                <tr>
                  <td>520</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>76.93034455741</td>
                </tr>
                <tr>
                  <td>521</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>75.0804628286263</td>
                </tr>
                <tr>
                  <td>522</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>85.7761049248876</td>
                </tr>
                <tr>
                  <td>523</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>78.3440328156431</td>
                </tr>
                <tr>
                  <td>524</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>79.0588548277144</td>
                </tr>
                <tr>
                  <td>525</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>67.4052368344464</td>
                </tr>
                <tr>
                  <td>526</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>86.5291741781017</td>
                </tr>
                <tr>
                  <td>527</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>66.445894284044</td>
                </tr>
                <tr>
                  <td>528</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>84.9468326983615</td>
                </tr>
                <tr>
                  <td>529</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>79.874758600121</td>
                </tr>
                <tr>
                  <td>530</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>77.7268744414856</td>
                </tr>
                <tr>
                  <td>531</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>58.0304388957618</td>
                </tr>
                <tr>
                  <td>532</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>59.980174113233</td>
                </tr>
                <tr>
                  <td>533</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>84.0182734734884</td>
                </tr>
                <tr>
                  <td>534</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>83.9510927193299</td>
                </tr>
                <tr>
                  <td>535</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>73.2942202504996</td>
                </tr>
                <tr>
                  <td>536</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>68.6828893641137</td>
                </tr>
                <tr>
                  <td>537</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>58.5200745496457</td>
                </tr>
                <tr>
                  <td>538</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>68.0739653086959</td>
                </tr>
                <tr>
                  <td>539</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>76.0608655576156</td>
                </tr>
                <tr>
                  <td>540</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>74.6604986772732</td>
                </tr>
                <tr>
                  <td>541</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>86.1706302757125</td>
                </tr>
                <tr>
                  <td>542</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>75.4533080529456</td>
                </tr>
                <tr>
                  <td>543</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>65.7372682054565</td>
                </tr>
                <tr>
                  <td>544</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>57.9141726701747</td>
                </tr>
                <tr>
                  <td>545</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>67.5151222396185</td>
                </tr>
                <tr>
                  <td>546</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>81.3673351315586</td>
                </tr>
                <tr>
                  <td>547</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>74.4571735787392</td>
                </tr>
                <tr>
                  <td>548</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>61.0467675901215</td>
                </tr>
                <tr>
                  <td>549</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>71.0010288578413</td>
                </tr>
                <tr>
                  <td>550</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>76.3774535833272</td>
                </tr>
                <tr>
                  <td>551</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>83.1387834359055</td>
                </tr>
                <tr>
                  <td>552</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>61.3968198869778</td>
                </tr>
                <tr>
                  <td>553</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>65.6106048872693</td>
                </tr>
                <tr>
                  <td>554</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>61.6009079171114</td>
                </tr>
                <tr>
                  <td>555</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>51.4127798715027</td>
                </tr>
                <tr>
                  <td>556</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>62.3449080475868</td>
                </tr>
                <tr>
                  <td>557</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>82.554983508388</td>
                </tr>
                <tr>
                  <td>558</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>94.2073812774263</td>
                </tr>
                <tr>
                  <td>559</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>95.7261181364311</td>
                </tr>
                <tr>
                  <td>560</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>72.3780857594772</td>
                </tr>
                <tr>
                  <td>561</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>101.963839745848</td>
                </tr>
                <tr>
                  <td>562</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>85.5423220605122</td>
                </tr>
                <tr>
                  <td>563</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>64.5520167058591</td>
                </tr>
                <tr>
                  <td>564</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>61.2701191323208</td>
                </tr>
                <tr>
                  <td>565</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>75.571838941586</td>
                </tr>
                <tr>
                  <td>566</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>66.6823156909478</td>
                </tr>
                <tr>
                  <td>567</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>69.4335528614914</td>
                </tr>
                <tr>
                  <td>568</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>46.7084232812319</td>
                </tr>
                <tr>
                  <td>569</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>83.03222890479</td>
                </tr>
                <tr>
                  <td>570</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>82.7388079558816</td>
                </tr>
                <tr>
                  <td>571</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>51.9124021217482</td>
                </tr>
                <tr>
                  <td>572</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>73.2366072284128</td>
                </tr>
                <tr>
                  <td>573</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>74.7049423918478</td>
                </tr>
                <tr>
                  <td>574</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>85.5661733014366</td>
                </tr>
                <tr>
                  <td>575</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>59.1216091738688</td>
                </tr>
                <tr>
                  <td>576</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>70.5341104234465</td>
                </tr>
                <tr>
                  <td>577</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>66.8668918273751</td>
                </tr>
                <tr>
                  <td>578</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>58.8600112785535</td>
                </tr>
                <tr>
                  <td>579</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>75.1128161677677</td>
                </tr>
                <tr>
                  <td>580</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>92.2825894959762</td>
                </tr>
                <tr>
                  <td>581</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>62.1437912781098</td>
                </tr>
                <tr>
                  <td>582</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>58.3159264498356</td>
                </tr>
                <tr>
                  <td>583</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>90.7464848248131</td>
                </tr>
                <tr>
                  <td>584</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>60.0983096907856</td>
                </tr>
                <tr>
                  <td>585</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>70.3050489241914</td>
                </tr>
                <tr>
                  <td>586</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>92.8953293322203</td>
                </tr>
                <tr>
                  <td>587</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>107.235051476782</td>
                </tr>
                <tr>
                  <td>588</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>72.4824734618242</td>
                </tr>
                <tr>
                  <td>589</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>73.192970804907</td>
                </tr>
                <tr>
                  <td>590</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>74.2373396340167</td>
                </tr>
                <tr>
                  <td>591</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>81.9619142535281</td>
                </tr>
                <tr>
                  <td>592</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>79.2843776617545</td>
                </tr>
                <tr>
                  <td>593</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>56.9793705024682</td>
                </tr>
                <tr>
                  <td>594</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>67.6415654976834</td>
                </tr>
                <tr>
                  <td>595</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>59.3440977589973</td>
                </tr>
                <tr>
                  <td>596</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>59.8480509099661</td>
                </tr>
                <tr>
                  <td>597</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>87.7128764209947</td>
                </tr>
                <tr>
                  <td>598</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>83.2013988966628</td>
                </tr>
                <tr>
                  <td>599</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>59.5723103424207</td>
                </tr>
                <tr>
                  <td>600</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>71.9551544438525</td>
                </tr>
                <tr>
                  <td>601</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>89.3181647653053</td>
                </tr>
                <tr>
                  <td>602</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>77.3095642757988</td>
                </tr>
                <tr>
                  <td>603</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>50.9192351425357</td>
                </tr>
                <tr>
                  <td>604</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>59.6463507017674</td>
                </tr>
                <tr>
                  <td>605</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>83.3530694504747</td>
                </tr>
                <tr>
                  <td>606</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>73.3726184484223</td>
                </tr>
                <tr>
                  <td>607</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>55.9312567770481</td>
                </tr>
                <tr>
                  <td>608</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>62.1052738656337</td>
                </tr>
                <tr>
                  <td>609</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>65.8651463577293</td>
                </tr>
                <tr>
                  <td>610</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>61.2202420877709</td>
                </tr>
                <tr>
                  <td>611</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>73.1190761230573</td>
                </tr>
                <tr>
                  <td>612</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>78.0594013711066</td>
                </tr>
                <tr>
                  <td>613</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>62.7965220373284</td>
                </tr>
                <tr>
                  <td>614</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>98.8955560015959</td>
                </tr>
                <tr>
                  <td>615</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>67.1759328259608</td>
                </tr>
                <tr>
                  <td>616</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>59.4759663335738</td>
                </tr>
                <tr>
                  <td>617</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>86.0718144080665</td>
                </tr>
                <tr>
                  <td>618</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>51.5943493092937</td>
                </tr>
                <tr>
                  <td>619</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>82.6474900120877</td>
                </tr>
                <tr>
                  <td>620</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>83.437747104958</td>
                </tr>
                <tr>
                  <td>621</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>61.2415362484038</td>
                </tr>
                <tr>
                  <td>622</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>55.4553357415447</td>
                </tr>
                <tr>
                  <td>623</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>80.5390625937176</td>
                </tr>
                <tr>
                  <td>624</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>91.2333129929203</td>
                </tr>
                <tr>
                  <td>625</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>75.6629083812233</td>
                </tr>
                <tr>
                  <td>626</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>59.2180872270248</td>
                </tr>
                <tr>
                  <td>627</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>70.7162682668225</td>
                </tr>
                <tr>
                  <td>628</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>61.824814065452</td>
                </tr>
                <tr>
                  <td>629</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>106.664361564014</td>
                </tr>
                <tr>
                  <td>630</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>66.7317398583326</td>
                </tr>
                <tr>
                  <td>631</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>71.8130347952897</td>
                </tr>
                <tr>
                  <td>632</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>102.393930781301</td>
                </tr>
                <tr>
                  <td>633</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>64.8218218171726</td>
                </tr>
                <tr>
                  <td>634</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>70.1140513545877</td>
                </tr>
                <tr>
                  <td>635</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>64.6085151848904</td>
                </tr>
                <tr>
                  <td>636</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>61.7271642428765</td>
                </tr>
                <tr>
                  <td>637</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>83.11357947309</td>
                </tr>
                <tr>
                  <td>638</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>74.3398385674202</td>
                </tr>
                <tr>
                  <td>639</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>72.6054424641178</td>
                </tr>
                <tr>
                  <td>640</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>75.2069999696871</td>
                </tr>
                <tr>
                  <td>641</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>65.5498996515398</td>
                </tr>
                <tr>
                  <td>642</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>68.5524276796221</td>
                </tr>
                <tr>
                  <td>643</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>92.4967523634117</td>
                </tr>
                <tr>
                  <td>644</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>95.9856071332838</td>
                </tr>
                <tr>
                  <td>645</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>65.900319241452</td>
                </tr>
                <tr>
                  <td>646</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>74.7093154424543</td>
                </tr>
                <tr>
                  <td>647</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>82.8844352352588</td>
                </tr>
                <tr>
                  <td>648</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>81.9384904402337</td>
                </tr>
                <tr>
                  <td>649</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>75.7794936226614</td>
                </tr>
                <tr>
                  <td>650</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>70.2371842579553</td>
                </tr>
                <tr>
                  <td>651</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>70.9763265717375</td>
                </tr>
                <tr>
                  <td>652</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>76.7963218703249</td>
                </tr>
                <tr>
                  <td>653</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>63.9221818746379</td>
                </tr>
                <tr>
                  <td>654</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>47.6286060976096</td>
                </tr>
                <tr>
                  <td>655</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>80.0172579811992</td>
                </tr>
                <tr>
                  <td>656</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>79.9134763182019</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>95.9738608395606</td>
                </tr>
                <tr>
                  <td>658</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>83.3143640380963</td>
                </tr>
                <tr>
                  <td>659</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>74.4077071222281</td>
                </tr>
                <tr>
                  <td>660</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>72.0940233271035</td>
                </tr>
                <tr>
                  <td>661</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>71.9162095604467</td>
                </tr>
                <tr>
                  <td>662</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>63.2634357522057</td>
                </tr>
                <tr>
                  <td>663</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>76.6933758163852</td>
                </tr>
                <tr>
                  <td>664</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>80.1507471825344</td>
                </tr>
                <tr>
                  <td>665</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>61.8871331049814</td>
                </tr>
                <tr>
                  <td>666</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>68.6355760778324</td>
                </tr>
                <tr>
                  <td>667</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>82.8551174495784</td>
                </tr>
                <tr>
                  <td>668</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>65.9933816456124</td>
                </tr>
                <tr>
                  <td>669</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>66.483686761939</td>
                </tr>
                <tr>
                  <td>670</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>72.6282695963434</td>
                </tr>
                <tr>
                  <td>671</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>60.1464586989369</td>
                </tr>
                <tr>
                  <td>672</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>60.8657300325836</td>
                </tr>
                <tr>
                  <td>673</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>53.7573978000324</td>
                </tr>
                <tr>
                  <td>674</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>84.2711003859264</td>
                </tr>
                <tr>
                  <td>675</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>48.5512547501435</td>
                </tr>
                <tr>
                  <td>676</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>60.6644815496114</td>
                </tr>
                <tr>
                  <td>677</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>54.7500352224562</td>
                </tr>
                <tr>
                  <td>678</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>84.9684127069693</td>
                </tr>
                <tr>
                  <td>679</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>67.9260897361043</td>
                </tr>
                <tr>
                  <td>680</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>99.0229263630016</td>
                </tr>
                <tr>
                  <td>681</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>69.3469617837752</td>
                </tr>
                <tr>
                  <td>682</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>61.6605163068949</td>
                </tr>
                <tr>
                  <td>683</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>70.6297698855925</td>
                </tr>
                <tr>
                  <td>684</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>45.3133756538817</td>
                </tr>
                <tr>
                  <td>685</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>61.4428665344322</td>
                </tr>
                <tr>
                  <td>686</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>58.4485064693327</td>
                </tr>
                <tr>
                  <td>687</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>69.7769494459265</td>
                </tr>
                <tr>
                  <td>688</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>70.4285810801359</td>
                </tr>
                <tr>
                  <td>689</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>72.3832662539891</td>
                </tr>
                <tr>
                  <td>690</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>73.092987465617</td>
                </tr>
                <tr>
                  <td>691</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>60.9372819774491</td>
                </tr>
                <tr>
                  <td>692</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>74.9902932447182</td>
                </tr>
                <tr>
                  <td>693</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>74.276690730193</td>
                </tr>
                <tr>
                  <td>694</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>98.0809936474084</td>
                </tr>
                <tr>
                  <td>695</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>76.4536528120809</td>
                </tr>
                <tr>
                  <td>696</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>58.272895549224</td>
                </tr>
                <tr>
                  <td>697</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>76.0053561845094</td>
                </tr>
                <tr>
                  <td>698</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>77.5347087743125</td>
                </tr>
                <tr>
                  <td>699</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>59.8816400585104</td>
                </tr>
                <tr>
                  <td>700</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>96.3485653668993</td>
                </tr>
                <tr>
                  <td>701</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>71.6421603673018</td>
                </tr>
                <tr>
                  <td>702</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>74.2497473876896</td>
                </tr>
                <tr>
                  <td>703</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>77.0758479661447</td>
                </tr>
                <tr>
                  <td>704</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>75.3838689920259</td>
                </tr>
                <tr>
                  <td>705</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>70.5887537284642</td>
                </tr>
                <tr>
                  <td>706</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>75.1651178099503</td>
                </tr>
                <tr>
                  <td>707</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>75.2440539512464</td>
                </tr>
                <tr>
                  <td>708</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>93.560627680069</td>
                </tr>
                <tr>
                  <td>709</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>89.5502000255921</td>
                </tr>
                <tr>
                  <td>710</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>69.9479965228975</td>
                </tr>
                <tr>
                  <td>711</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>81.1521629807776</td>
                </tr>
                <tr>
                  <td>712</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>66.3237977188057</td>
                </tr>
                <tr>
                  <td>713</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>51.8204200026635</td>
                </tr>
                <tr>
                  <td>714</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>80.7094135988445</td>
                </tr>
                <tr>
                  <td>715</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>89.8081304840302</td>
                </tr>
                <tr>
                  <td>716</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>68.2081385597975</td>
                </tr>
                <tr>
                  <td>717</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>65.1244400347925</td>
                </tr>
                <tr>
                  <td>718</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>74.1365739706015</td>
                </tr>
                <tr>
                  <td>719</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>55.5366894298474</td>
                </tr>
                <tr>
                  <td>720</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>84.6470094612705</td>
                </tr>
                <tr>
                  <td>721</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>65.2498513933341</td>
                </tr>
                <tr>
                  <td>722</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>51.3319026421866</td>
                </tr>
                <tr>
                  <td>723</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>90.4857016911711</td>
                </tr>
                <tr>
                  <td>724</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>103.144686420643</td>
                </tr>
                <tr>
                  <td>725</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>60.5824788818978</td>
                </tr>
                <tr>
                  <td>726</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>70.0217749283252</td>
                </tr>
                <tr>
                  <td>727</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>85.0818868300172</td>
                </tr>
                <tr>
                  <td>728</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>88.5998283243071</td>
                </tr>
                <tr>
                  <td>729</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>96.4663043750625</td>
                </tr>
                <tr>
                  <td>730</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>78.821523377718</td>
                </tr>
                <tr>
                  <td>731</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>70.9427180290816</td>
                </tr>
                <tr>
                  <td>732</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>92.0224973719835</td>
                </tr>
                <tr>
                  <td>733</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>73.0959320860874</td>
                </tr>
                <tr>
                  <td>734</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>95.383544811262</td>
                </tr>
                <tr>
                  <td>735</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>73.5176070114014</td>
                </tr>
                <tr>
                  <td>736</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>85.3287031682992</td>
                </tr>
                <tr>
                  <td>737</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>85.649667729952</td>
                </tr>
                <tr>
                  <td>738</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>82.9795948889707</td>
                </tr>
                <tr>
                  <td>739</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>83.6966854208427</td>
                </tr>
                <tr>
                  <td>740</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>52.5900079722005</td>
                </tr>
                <tr>
                  <td>741</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>82.3107622234729</td>
                </tr>
                <tr>
                  <td>742</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>66.4968264489511</td>
                </tr>
                <tr>
                  <td>743</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>59.904903885586</td>
                </tr>
                <tr>
                  <td>744</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>56.8948812588832</td>
                </tr>
                <tr>
                  <td>745</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>59.9296000737997</td>
                </tr>
                <tr>
                  <td>746</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>67.0547519528448</td>
                </tr>
                <tr>
                  <td>747</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>71.2848464857582</td>
                </tr>
                <tr>
                  <td>748</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>58.9015301975162</td>
                </tr>
                <tr>
                  <td>749</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>63.456263445695</td>
                </tr>
                <tr>
                  <td>750</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>92.3920892057798</td>
                </tr>
                <tr>
                  <td>751</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>71.1564476928871</td>
                </tr>
                <tr>
                  <td>752</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>67.3507023603479</td>
                </tr>
                <tr>
                  <td>753</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>81.9806316150304</td>
                </tr>
                <tr>
                  <td>754</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>86.986672026513</td>
                </tr>
                <tr>
                  <td>755</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>71.750482158524</td>
                </tr>
                <tr>
                  <td>756</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>94.9198049096777</td>
                </tr>
                <tr>
                  <td>757</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>89.3190666197941</td>
                </tr>
                <tr>
                  <td>758</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>103.733164613777</td>
                </tr>
                <tr>
                  <td>759</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>76.8835727372146</td>
                </tr>
                <tr>
                  <td>760</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>90.6522324720493</td>
                </tr>
                <tr>
                  <td>761</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>89.4100287156921</td>
                </tr>
                <tr>
                  <td>762</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>61.7920894774815</td>
                </tr>
                <tr>
                  <td>763</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>64.3225622201858</td>
                </tr>
                <tr>
                  <td>764</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>92.8855976450933</td>
                </tr>
                <tr>
                  <td>765</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>77.3159833433511</td>
                </tr>
                <tr>
                  <td>766</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>62.9324453712043</td>
                </tr>
                <tr>
                  <td>767</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>78.6256667453029</td>
                </tr>
                <tr>
                  <td>768</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>64.4302757929049</td>
                </tr>
                <tr>
                  <td>769</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>76.9116797968617</td>
                </tr>
                <tr>
                  <td>770</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>74.8279611070563</td>
                </tr>
                <tr>
                  <td>771</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>70.6538646850676</td>
                </tr>
                <tr>
                  <td>772</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>53.6899664477282</td>
                </tr>
                <tr>
                  <td>773</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>76.1187367576907</td>
                </tr>
                <tr>
                  <td>774</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>72.1476412746459</td>
                </tr>
                <tr>
                  <td>775</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>64.0831521569153</td>
                </tr>
                <tr>
                  <td>776</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>81.1445886287487</td>
                </tr>
                <tr>
                  <td>777</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>78.0717410982829</td>
                </tr>
                <tr>
                  <td>778</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>63.6969582184862</td>
                </tr>
                <tr>
                  <td>779</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>88.1429991626885</td>
                </tr>
                <tr>
                  <td>780</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>79.7713701126327</td>
                </tr>
                <tr>
                  <td>781</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>68.1924580999547</td>
                </tr>
                <tr>
                  <td>782</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>74.5841305055584</td>
                </tr>
                <tr>
                  <td>783</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>81.6975517596478</td>
                </tr>
                <tr>
                  <td>784</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>76.0247081640275</td>
                </tr>
                <tr>
                  <td>785</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>81.6960732926407</td>
                </tr>
                <tr>
                  <td>786</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>79.0923763159473</td>
                </tr>
                <tr>
                  <td>787</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>65.6968267314141</td>
                </tr>
                <tr>
                  <td>788</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>58.3026886904066</td>
                </tr>
                <tr>
                  <td>789</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>66.0930645761955</td>
                </tr>
                <tr>
                  <td>790</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>70.9251952704186</td>
                </tr>
                <tr>
                  <td>791</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>60.9195574351808</td>
                </tr>
                <tr>
                  <td>792</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>63.8238132592757</td>
                </tr>
                <tr>
                  <td>793</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>70.0134259471065</td>
                </tr>
                <tr>
                  <td>794</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>75.1870862592338</td>
                </tr>
                <tr>
                  <td>795</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>82.8858311354164</td>
                </tr>
                <tr>
                  <td>796</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>59.2423875271998</td>
                </tr>
                <tr>
                  <td>797</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>54.430810778001</td>
                </tr>
                <tr>
                  <td>798</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>68.2016598566405</td>
                </tr>
                <tr>
                  <td>799</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>62.6289789952026</td>
                </tr>
                <tr>
                  <td>800</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>82.2500671884278</td>
                </tr>
                <tr>
                  <td>801</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>63.4088065546647</td>
                </tr>
                <tr>
                  <td>802</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>64.2301668566473</td>
                </tr>
                <tr>
                  <td>803</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>90.471942147871</td>
                </tr>
                <tr>
                  <td>804</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>77.5969190762375</td>
                </tr>
                <tr>
                  <td>805</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>71.1794397241983</td>
                </tr>
                <tr>
                  <td>806</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>77.5807658437573</td>
                </tr>
                <tr>
                  <td>807</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>68.3483762100851</td>
                </tr>
                <tr>
                  <td>808</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>81.4234534777371</td>
                </tr>
                <tr>
                  <td>809</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>79.8186775594365</td>
                </tr>
                <tr>
                  <td>810</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>54.3467090520736</td>
                </tr>
                <tr>
                  <td>811</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>86.442009811703</td>
                </tr>
                <tr>
                  <td>812</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>58.6529242617445</td>
                </tr>
                <tr>
                  <td>813</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>71.6160756357516</td>
                </tr>
                <tr>
                  <td>814</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>67.0634595753097</td>
                </tr>
                <tr>
                  <td>815</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>73.3018262544003</td>
                </tr>
                <tr>
                  <td>816</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>80.2635393358161</td>
                </tr>
                <tr>
                  <td>817</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>83.1146539129337</td>
                </tr>
                <tr>
                  <td>818</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>62.5940991901983</td>
                </tr>
                <tr>
                  <td>819</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>74.3290401045672</td>
                </tr>
                <tr>
                  <td>820</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>54.5572111224629</td>
                </tr>
                <tr>
                  <td>821</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>87.4659645932229</td>
                </tr>
                <tr>
                  <td>822</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>80.6323627327286</td>
                </tr>
                <tr>
                  <td>823</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>55.3801877038102</td>
                </tr>
                <tr>
                  <td>824</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>78.7011173752415</td>
                </tr>
                <tr>
                  <td>825</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>86.7275824141467</td>
                </tr>
                <tr>
                  <td>826</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>54.6494843977294</td>
                </tr>
                <tr>
                  <td>827</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>70.9363713695386</td>
                </tr>
                <tr>
                  <td>828</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>45.5368071197467</td>
                </tr>
                <tr>
                  <td>829</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>66.224693256442</td>
                </tr>
                <tr>
                  <td>830</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>81.4434049879243</td>
                </tr>
                <tr>
                  <td>831</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>49.9473771864864</td>
                </tr>
                <tr>
                  <td>832</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>85.5322674494375</td>
                </tr>
                <tr>
                  <td>833</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>61.5527795405392</td>
                </tr>
                <tr>
                  <td>834</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>90.0395771441975</td>
                </tr>
                <tr>
                  <td>835</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>69.7896430679353</td>
                </tr>
                <tr>
                  <td>836</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>69.8592160347842</td>
                </tr>
                <tr>
                  <td>837</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>75.2695327837531</td>
                </tr>
                <tr>
                  <td>838</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>76.46618664509</td>
                </tr>
                <tr>
                  <td>839</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>89.2401373592826</td>
                </tr>
                <tr>
                  <td>840</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>72.1525769459374</td>
                </tr>
                <tr>
                  <td>841</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>72.3592088474934</td>
                </tr>
                <tr>
                  <td>842</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>71.6855007771153</td>
                </tr>
                <tr>
                  <td>843</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>74.4508220520587</td>
                </tr>
                <tr>
                  <td>844</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>58.1043975460202</td>
                </tr>
                <tr>
                  <td>845</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>73.314854737787</td>
                </tr>
                <tr>
                  <td>846</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>74.1293846089495</td>
                </tr>
                <tr>
                  <td>847</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>62.9254841771644</td>
                </tr>
                <tr>
                  <td>848</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>65.7400661448326</td>
                </tr>
                <tr>
                  <td>849</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>77.4445020087427</td>
                </tr>
                <tr>
                  <td>850</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>68.4786693536313</td>
                </tr>
                <tr>
                  <td>851</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>76.1716198623727</td>
                </tr>
                <tr>
                  <td>852</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>79.259193235826</td>
                </tr>
                <tr>
                  <td>853</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>62.6377381963711</td>
                </tr>
                <tr>
                  <td>854</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>67.5451998955407</td>
                </tr>
                <tr>
                  <td>855</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>71.9304517772237</td>
                </tr>
                <tr>
                  <td>856</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>59.1745809746366</td>
                </tr>
                <tr>
                  <td>857</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>98.7912259938933</td>
                </tr>
                <tr>
                  <td>858</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>47.7183726647005</td>
                </tr>
                <tr>
                  <td>859</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>49.7956889656857</td>
                </tr>
                <tr>
                  <td>860</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>56.5249533685231</td>
                </tr>
                <tr>
                  <td>861</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>69.0076292129638</td>
                </tr>
                <tr>
                  <td>862</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>83.9869681412121</td>
                </tr>
                <tr>
                  <td>863</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>81.0162500498522</td>
                </tr>
                <tr>
                  <td>864</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>64.436526808468</td>
                </tr>
                <tr>
                  <td>865</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>80.400524342282</td>
                </tr>
                <tr>
                  <td>866</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>91.6409830038471</td>
                </tr>
                <tr>
                  <td>867</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>73.0861700627439</td>
                </tr>
                <tr>
                  <td>868</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>70.5317854853697</td>
                </tr>
                <tr>
                  <td>869</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>64.7403240860169</td>
                </tr>
                <tr>
                  <td>870</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>66.2317983346844</td>
                </tr>
                <tr>
                  <td>871</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>53.8964081590555</td>
                </tr>
                <tr>
                  <td>872</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>68.0593575994197</td>
                </tr>
                <tr>
                  <td>873</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>68.0969992063218</td>
                </tr>
                <tr>
                  <td>874</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>90.9861891823464</td>
                </tr>
                <tr>
                  <td>875</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>99.7734148879862</td>
                </tr>
                <tr>
                  <td>876</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>69.6159290848269</td>
                </tr>
                <tr>
                  <td>877</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>109.613907027245</td>
                </tr>
                <tr>
                  <td>878</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>74.8071458105251</td>
                </tr>
                <tr>
                  <td>879</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>55.8144677608976</td>
                </tr>
                <tr>
                  <td>880</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>94.6094290394756</td>
                </tr>
                <tr>
                  <td>881</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>57.1667649276733</td>
                </tr>
                <tr>
                  <td>882</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>92.7142337103759</td>
                </tr>
                <tr>
                  <td>883</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>70.5545976509694</td>
                </tr>
                <tr>
                  <td>884</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>81.3758025698789</td>
                </tr>
                <tr>
                  <td>885</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>85.2385565821538</td>
                </tr>
                <tr>
                  <td>886</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>88.1873073621969</td>
                </tr>
                <tr>
                  <td>887</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>68.9055044781768</td>
                </tr>
                <tr>
                  <td>888</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>72.7333165935772</td>
                </tr>
                <tr>
                  <td>889</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>77.8712716812893</td>
                </tr>
                <tr>
                  <td>890</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>69.948373900525</td>
                </tr>
                <tr>
                  <td>891</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>63.0688598718144</td>
                </tr>
                <tr>
                  <td>892</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>90.2397498674078</td>
                </tr>
                <tr>
                  <td>893</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>71.3173487721988</td>
                </tr>
                <tr>
                  <td>894</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>82.4058533371173</td>
                </tr>
                <tr>
                  <td>895</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>69.2191650723644</td>
                </tr>
                <tr>
                  <td>896</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>92.8160872500404</td>
                </tr>
                <tr>
                  <td>897</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>92.3420589620647</td>
                </tr>
                <tr>
                  <td>898</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>75.7789342545095</td>
                </tr>
                <tr>
                  <td>899</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>90.5047372607076</td>
                </tr>
                <tr>
                  <td>900</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>93.2230763397855</td>
                </tr>
                <tr>
                  <td>901</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>72.2183594488595</td>
                </tr>
                <tr>
                  <td>902</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>78.597063138463</td>
                </tr>
                <tr>
                  <td>903</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>58.2931507024322</td>
                </tr>
                <tr>
                  <td>904</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>76.6969421232186</td>
                </tr>
                <tr>
                  <td>905</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>55.8479931090915</td>
                </tr>
                <tr>
                  <td>906</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>47.2834635938915</td>
                </tr>
                <tr>
                  <td>907</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>53.0145368101953</td>
                </tr>
                <tr>
                  <td>908</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>84.982442368068</td>
                </tr>
                <tr>
                  <td>909</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>70.6466602459782</td>
                </tr>
                <tr>
                  <td>910</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>68.4510574814759</td>
                </tr>
                <tr>
                  <td>911</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>71.6665928633001</td>
                </tr>
                <tr>
                  <td>912</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>80.8441518214211</td>
                </tr>
                <tr>
                  <td>913</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>76.4342158861462</td>
                </tr>
                <tr>
                  <td>914</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>80.9387084586649</td>
                </tr>
                <tr>
                  <td>915</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>66.3170947718727</td>
                </tr>
                <tr>
                  <td>916</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>70.3558904197141</td>
                </tr>
                <tr>
                  <td>917</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>58.5506164365595</td>
                </tr>
                <tr>
                  <td>918</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>83.7307163671351</td>
                </tr>
                <tr>
                  <td>919</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>77.2330063909332</td>
                </tr>
                <tr>
                  <td>920</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>60.3390315766539</td>
                </tr>
                <tr>
                  <td>921</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>82.3479766383246</td>
                </tr>
                <tr>
                  <td>922</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>88.0450591110806</td>
                </tr>
                <tr>
                  <td>923</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>87.5143060934314</td>
                </tr>
                <tr>
                  <td>924</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>86.1473776828473</td>
                </tr>
                <tr>
                  <td>925</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>70.2115503847401</td>
                </tr>
                <tr>
                  <td>926</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>70.0272472597614</td>
                </tr>
                <tr>
                  <td>927</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>67.4287914861673</td>
                </tr>
                <tr>
                  <td>928</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>75.3287921542307</td>
                </tr>
                <tr>
                  <td>929</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>74.7092710715205</td>
                </tr>
                <tr>
                  <td>930</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>65.8139500845575</td>
                </tr>
                <tr>
                  <td>931</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>61.2144078467481</td>
                </tr>
                <tr>
                  <td>932</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>89.6163138848048</td>
                </tr>
                <tr>
                  <td>933</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>62.8406341103298</td>
                </tr>
                <tr>
                  <td>934</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>68.860384377685</td>
                </tr>
                <tr>
                  <td>935</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>58.591257194792</td>
                </tr>
                <tr>
                  <td>936</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>65.2312505517767</td>
                </tr>
                <tr>
                  <td>937</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>51.5607288959921</td>
                </tr>
                <tr>
                  <td>938</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>64.8255925573503</td>
                </tr>
                <tr>
                  <td>939</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>77.523486422856</td>
                </tr>
                <tr>
                  <td>940</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>60.9326286077699</td>
                </tr>
                <tr>
                  <td>941</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>64.1244051883005</td>
                </tr>
                <tr>
                  <td>942</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>99.8946038335309</td>
                </tr>
                <tr>
                  <td>943</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>83.1878848727688</td>
                </tr>
                <tr>
                  <td>944</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>66.548389107451</td>
                </tr>
                <tr>
                  <td>945</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>57.4735592308364</td>
                </tr>
                <tr>
                  <td>946</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>90.1674577825396</td>
                </tr>
                <tr>
                  <td>947</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>71.0123957746308</td>
                </tr>
                <tr>
                  <td>948</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>83.5671111200984</td>
                </tr>
                <tr>
                  <td>949</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>81.4163787673449</td>
                </tr>
                <tr>
                  <td>950</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>92.1712084458142</td>
                </tr>
                <tr>
                  <td>951</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>67.6233117135326</td>
                </tr>
                <tr>
                  <td>952</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>69.2464096003263</td>
                </tr>
                <tr>
                  <td>953</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>72.638680170921</td>
                </tr>
                <tr>
                  <td>954</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>104.924029348297</td>
                </tr>
                <tr>
                  <td>955</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>76.1994994256104</td>
                </tr>
                <tr>
                  <td>956</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>65.6838023627443</td>
                </tr>
                <tr>
                  <td>957</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>71.2039609150319</td>
                </tr>
                <tr>
                  <td>958</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>77.8322522379906</td>
                </tr>
                <tr>
                  <td>959</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>74.8499884521531</td>
                </tr>
                <tr>
                  <td>960</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>70.3990277230023</td>
                </tr>
                <tr>
                  <td>961</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>91.6290730569144</td>
                </tr>
                <tr>
                  <td>962</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>67.2370000878207</td>
                </tr>
                <tr>
                  <td>963</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>71.5779131859126</td>
                </tr>
                <tr>
                  <td>964</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>94.2930956098047</td>
                </tr>
                <tr>
                  <td>965</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>71.7315232680669</td>
                </tr>
                <tr>
                  <td>966</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>86.7048860563301</td>
                </tr>
                <tr>
                  <td>967</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>69.0597664972747</td>
                </tr>
                <tr>
                  <td>968</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>71.7665220683584</td>
                </tr>
                <tr>
                  <td>969</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>68.9976870044006</td>
                </tr>
                <tr>
                  <td>970</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>76.1377010198463</td>
                </tr>
                <tr>
                  <td>971</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>61.3766642827508</td>
                </tr>
                <tr>
                  <td>972</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>80.3286078747746</td>
                </tr>
                <tr>
                  <td>973</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>71.6102988580293</td>
                </tr>
                <tr>
                  <td>974</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>76.8155776711283</td>
                </tr>
                <tr>
                  <td>975</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>73.0638697159793</td>
                </tr>
                <tr>
                  <td>976</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>8</td>
                  <td>75.425193196039</td>
                </tr>
                <tr>
                  <td>977</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>80.034464103601</td>
                </tr>
                <tr>
                  <td>978</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>76.5443415865485</td>
                </tr>
                <tr>
                  <td>979</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>76.6229863788334</td>
                </tr>
                <tr>
                  <td>980</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>99.6311381256935</td>
                </tr>
                <tr>
                  <td>981</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>72.8134680120886</td>
                </tr>
                <tr>
                  <td>982</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>4</td>
                  <td>74.8101209500606</td>
                </tr>
                <tr>
                  <td>983</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>80.4095480114406</td>
                </tr>
                <tr>
                  <td>984</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>86.2583213634616</td>
                </tr>
                <tr>
                  <td>985</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>87.2173380217864</td>
                </tr>
                <tr>
                  <td>986</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>69.8019712007804</td>
                </tr>
                <tr>
                  <td>987</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>74.5764808409476</td>
                </tr>
                <tr>
                  <td>988</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>5</td>
                  <td>81.4261515507519</td>
                </tr>
                <tr>
                  <td>989</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>80.1298796613755</td>
                </tr>
                <tr>
                  <td>990</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>71.0577520329295</td>
                </tr>
                <tr>
                  <td>991</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>73.0609472484431</td>
                </tr>
                <tr>
                  <td>992</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>51.794755747207</td>
                </tr>
                <tr>
                  <td>993</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>7</td>
                  <td>75.3842543882594</td>
                </tr>
                <tr>
                  <td>994</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>9</td>
                  <td>75.0968241568725</td>
                </tr>
                <tr>
                  <td>995</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>3</td>
                  <td>72.4247085865235</td>
                </tr>
                <tr>
                  <td>996</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>1</td>
                  <td>57.4217746195807</td>
                </tr>
                <tr>
                  <td>997</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>0</td>
                  <td>67.198412047229</td>
                </tr>
                <tr>
                  <td>998</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>2</td>
                  <td>64.5113229063998</td>
                </tr>
                <tr>
                  <td>999</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>92.8637001496799</td>
                </tr>
                <tr>
                  <td>1000</td>
                  <td>2018-04-08 12:20:42</td>
                  <td>6</td>
                  <td>96.2666829717872</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["115", "121", "143", "144", "148", "173", "177", "181", "19", "192", "196", "202", "226", "252", "306", "338", "346", "35", "365", "383", "397", "398", "404", "408", "411", "416", "418", "419", "425", "426", "436", "441", "452", "462", "464", "473", "476", "480", "490", "506", "507", "537", "547", "548", "565", "569", "594", "596", "603", "607", "608", "609", "610", "612", "621", "622", "626", "644", "647", "655", "66", "664", "677", "703", "710", "712", "731", "745", "765", "78", "793", "796", "800", "812", "818", "821", "824", "829", "837", "84", "848", "857", "873", "887", "888", "898", "909", "913", "914", "92", "97", "972", "987", "996", ],
          datasets: [{
            data: [64.6625239551618, 87.5423580008778, 79.085642371035, 68.7210560208849, 58.648715872819, 65.0558237667157, 65.758579292442, 79.3451917675512, 74.0295114772289, 79.0908242032315, 76.0816200718704, 83.169247201764, 101.256619087188, 96.0187071956555, 74.2625323168919, 65.9046714973452, 55.4150051714564, 62.0034458131096, 64.3760034857346, 73.1781897887327, 76.0588730673824, 70.1196803564428, 79.0655921906518, 71.9051593274123, 79.6254301125548, 71.5695003758482, 68.908157585123, 69.9779393469408, 63.4901597419259, 75.8922446529478, 63.6839293815274, 66.8061536239944, 83.2833931951735, 77.4560453947794, 56.7572175165284, 87.1087202719822, 91.1796719020987, 83.1794035600115, 83.5026981296917, 85.2613524665552, 64.7508564605396, 58.5200745496457, 74.4571735787392, 61.0467675901215, 75.571838941586, 83.03222890479, 67.6415654976834, 59.8480509099661, 50.9192351425357, 55.9312567770481, 62.1052738656337, 65.8651463577293, 61.2202420877709, 78.0594013711066, 61.2415362484038, 55.4553357415447, 59.2180872270248, 95.9856071332838, 82.8844352352588, 80.0172579811992, 75.4216633748403, 80.1507471825344, 54.7500352224562, 77.0758479661447, 69.9479965228975, 66.3237977188057, 70.9427180290816, 59.9296000737997, 77.3159833433511, 87.8807932486388, 70.0134259471065, 59.2423875271998, 82.2500671884278, 58.6529242617445, 62.5940991901983, 87.4659645932229, 78.7011173752415, 66.224693256442, 75.2695327837531, 80.8599327911694, 65.7400661448326, 98.7912259938933, 68.0969992063218, 68.9055044781768, 72.7333165935772, 75.7789342545095, 70.6466602459782, 76.4342158861462, 80.9387084586649, 103.412252997426, 92.874310503527, 80.3286078747746, 74.5764808409476, 57.4217746195807, ],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
