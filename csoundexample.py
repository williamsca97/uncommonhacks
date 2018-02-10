import csnd6

c = csnd6.Csound()
c.Compile('table.csd')
c.Perform()
c.Stop()
