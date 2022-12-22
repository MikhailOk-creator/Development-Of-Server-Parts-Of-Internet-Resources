package ru.rtu_mirea.spring_pr8.service;

import ru.rtu_mirea.spring_pr8.model.CustomUserDetails;
import ru.rtu_mirea.spring_pr8.model.User;
import ru.rtu_mirea.spring_pr8.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.Optional;

@Service
@Transactional
public class CustomUserDetailsService implements UserDetailsService {
    @Autowired
    private UserRepository userRepository;

    @Override
    public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException {
        Optional<User> user = userRepository.findByName(username);
        return user.map(CustomUserDetails::new).orElseThrow(() -> new UsernameNotFoundException("Could not find user"));
    }
}
